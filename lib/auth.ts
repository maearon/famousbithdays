import bcrypt from "bcryptjs";
import { cookies } from "next/headers";

export const SESSION_COOKIE = "fb_session";

export type SessionUser = {
  id: string;
};

export async function verifyLogin(id: string, password: string) {
  const { prisma } = await import("@/lib/prisma");
  const user = await prisma.login.findUnique({ where: { id } });

  if (!user) {
    return null;
  }

  const valid = await bcrypt.compare(password, user.password);
  return valid ? { id: user.id } : null;
}

export async function getSession(): Promise<SessionUser | null> {
  const cookieStore = await cookies();
  const value = cookieStore.get(SESSION_COOKIE)?.value;

  if (!value) {
    return null;
  }

  try {
    return JSON.parse(value) as SessionUser;
  } catch {
    return null;
  }
}

export async function requireSession(): Promise<SessionUser> {
  const session = await getSession();

  if (!session) {
    throw new Error("Unauthorized");
  }

  return session;
}
