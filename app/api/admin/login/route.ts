import { NextResponse } from "next/server";
import bcrypt from "bcryptjs";
import { requireSession } from "@/lib/auth";
import { prisma } from "@/lib/prisma";

export async function POST(request: Request) {
  await requireSession();

  const formData = await request.formData();
  const id = String(formData.get("id") ?? "");
  const password = String(formData.get("password") ?? "");

  if (!id || !password) {
    return NextResponse.json({ error: "id and password are required" }, { status: 400 });
  }

  const hashedPassword = await bcrypt.hash(password, 10);
  await prisma.login.create({
    data: { id, password: hashedPassword },
  });

  return NextResponse.redirect(new URL("/admin", request.url));
}
