import Link from "next/link";
import { notFound, redirect } from "next/navigation";
import { Header } from "@/components/Header";
import { getSession } from "@/lib/auth";
import { prisma } from "@/lib/prisma";

type DeletePersonPageProps = {
  params: Promise<{ rank: string }>;
};

export default async function DeletePersonPage({ params }: DeletePersonPageProps) {
  const { rank: rankParam } = await params;
  const rank = Number(rankParam);
  const [person, session] = await Promise.all([
    prisma.person.findUnique({ where: { rank } }),
    getSession(),
  ]);

  if (!person) {
    notFound();
  }

  async function deletePerson() {
    "use server";
    const { prisma: db } = await import("@/lib/prisma");
    await db.person.delete({ where: { rank } });
    redirect("/admin");
  }

  return (
    <>
      <Header isLoggedIn={Boolean(session)} />
      <div className="page-wrapper">
        <div className="admin-page container">
          <h1>Xóa {person.name}?</h1>
          <form action={deletePerson}>
            <button type="submit">Xác nhận xóa</button>
          </form>
          <p>
            <Link href="/admin">← Hủy</Link>
          </p>
        </div>
      </div>
    </>
  );
}
