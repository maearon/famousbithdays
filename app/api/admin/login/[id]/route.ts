import { NextResponse } from "next/server";
import bcrypt from "bcryptjs";
import { requireSession } from "@/lib/auth";
import { prisma } from "@/lib/prisma";

type RouteContext = {
  params: Promise<{ id: string }>;
};

export async function POST(request: Request, context: RouteContext) {
  await requireSession();

  const { id } = await context.params;
  const formData = await request.formData();
  const password = String(formData.get("password") ?? "");
  const hashedPassword = await bcrypt.hash(password, 10);

  await prisma.login.update({
    where: { id },
    data: { password: hashedPassword },
  });

  return NextResponse.redirect(new URL("/admin", request.url));
}

export async function DELETE(_request: Request, context: RouteContext) {
  await requireSession();

  const { id } = await context.params;
  await prisma.login.delete({ where: { id } });

  return NextResponse.json({ ok: true });
}
