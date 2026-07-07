import { NextResponse } from "next/server";
import { SESSION_COOKIE, verifyLogin } from "@/lib/auth";

export async function POST(request: Request) {
  const formData = await request.formData();
  const id = String(formData.get("us") ?? "");
  const password = String(formData.get("pa") ?? "");

  const user = await verifyLogin(id, password);

  if (!user) {
    return NextResponse.redirect(new URL("/login?error=1", request.url));
  }

  const response = NextResponse.redirect(new URL("/admin", request.url));
  response.cookies.set(SESSION_COOKIE, JSON.stringify(user), {
    httpOnly: true,
    sameSite: "lax",
    secure: process.env.NODE_ENV === "production",
    path: "/",
  });

  return response;
}
