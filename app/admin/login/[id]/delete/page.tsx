import Link from "next/link";
import { notFound, redirect } from "next/navigation";
import { Header } from "@/components/Header";
import { getSession } from "@/lib/auth";
import { prisma } from "@/lib/prisma";

type DeleteLoginPageProps = {
  params: Promise<{ id: string }>;
};

export default async function DeleteLoginPage({ params }: DeleteLoginPageProps) {
  const { id } = await params;
  const [login, session] = await Promise.all([
    prisma.login.findUnique({ where: { id } }),
    getSession(),
  ]);

  if (!login) {
    notFound();
  }

  async function deleteLogin() {
    "use server";
    const { prisma: db } = await import("@/lib/prisma");
    await db.login.delete({ where: { id } });
    redirect("/admin");
  }

  return (
    <>
      <Header isLoggedIn={Boolean(session)} />
      <div className="page-wrapper">
        <div className="admin-page container">
          <h1>Xóa tài khoản {login.id}?</h1>
          <form action={deleteLogin}>
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
