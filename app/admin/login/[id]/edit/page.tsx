import Link from "next/link";
import { notFound } from "next/navigation";
import { Header } from "@/components/Header";
import { getSession } from "@/lib/auth";
import { prisma } from "@/lib/prisma";

type EditLoginPageProps = {
  params: Promise<{ id: string }>;
};

export default async function EditLoginPage({ params }: EditLoginPageProps) {
  const { id } = await params;
  const [login, session] = await Promise.all([
    prisma.login.findUnique({ where: { id } }),
    getSession(),
  ]);

  if (!login) {
    notFound();
  }

  return (
    <>
      <Header isLoggedIn={Boolean(session)} />
      <div className="page-wrapper">
        <div className="admin-page container">
          <h1>Sửa mật khẩu: {login.id}</h1>
          <form action={`/api/admin/login/${login.id}`} method="post" className="form-grid">
            <label>
              Mật khẩu mới
              <input type="password" name="password" required />
            </label>
            <button type="submit">Lưu</button>
          </form>
          <p>
            <Link href="/admin">← Quay lại</Link>
          </p>
        </div>
      </div>
    </>
  );
}
