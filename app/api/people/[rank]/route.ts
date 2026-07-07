import { NextResponse } from "next/server";
import { requireSession } from "@/lib/auth";
import { prisma } from "@/lib/prisma";

type RouteContext = {
  params: Promise<{ rank: string }>;
};

export async function POST(request: Request, context: RouteContext) {
  await requireSession();

  const { rank: rankParam } = await context.params;
  const rank = Number(rankParam);
  const formData = await request.formData();
  const name = String(formData.get("name") ?? "");
  const img = String(formData.get("img") ?? "");
  const age = String(formData.get("age") ?? "");
  const career = String(formData.get("career") ?? "");
  const link = String(formData.get("link") ?? "");

  await prisma.person.update({
    where: { rank },
    data: { name, img, age, career, link },
  });

  return NextResponse.redirect(new URL("/admin", request.url));
}

export async function DELETE(_request: Request, context: RouteContext) {
  await requireSession();

  const { rank: rankParam } = await context.params;
  const rank = Number(rankParam);

  await prisma.person.delete({ where: { rank } });

  return NextResponse.json({ ok: true });
}
