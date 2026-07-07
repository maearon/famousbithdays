import { NextResponse } from "next/server";
import { requireSession } from "@/lib/auth";
import { prisma } from "@/lib/prisma";

export async function POST(request: Request) {
  await requireSession();

  const formData = await request.formData();
  const rank = Number(formData.get("rank"));
  const name = String(formData.get("name") ?? "");
  const img = String(formData.get("img") ?? "");
  const age = String(formData.get("age") ?? "");
  const career = String(formData.get("career") ?? "");
  const link = String(formData.get("link") ?? "");

  if (!rank || !name) {
    return NextResponse.json({ error: "rank and name are required" }, { status: 400 });
  }

  await prisma.person.create({
    data: { rank, name, img, age, career, link },
  });

  return NextResponse.redirect(new URL("/admin", request.url));
}
