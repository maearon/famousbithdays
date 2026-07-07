import Link from "next/link";
import { Header } from "@/components/Header";
import { getSession } from "@/lib/auth";
import { prisma } from "@/lib/prisma";

export const dynamic = "force-dynamic";

export default async function AdminPage() {
  const [logins, people, session] = await Promise.all([
    prisma.login.findMany({ orderBy: { id: "asc" } }),
    prisma.person.findMany({ orderBy: { rank: "asc" } }),
    getSession(),
  ]);

  return (
    <>
      <Header isLoggedIn={Boolean(session)} />
      <div className="page-wrapper">
        <div className="admin-page container">
          <h1>Quản trị CSDL</h1>
          <p>
            <Link href="/">← Về trang chủ</Link>
          </p>

          <h2>Bảng Đăng Nhập</h2>
          <div className="admin-actions">
            <Link href="/admin/login/new">Thêm tài khoản</Link>
          </div>
          <table className="admin-table">
            <thead>
              <tr>
                <th>ID</th>
                <th>Hành động</th>
              </tr>
            </thead>
            <tbody>
              {logins.map((login) => (
                <tr key={login.id}>
                  <td>{login.id}</td>
                  <td>
                    <Link href={`/admin/login/${login.id}/edit`}>Sửa</Link>
                    {" | "}
                    <Link href={`/admin/login/${login.id}/delete`}>Xóa</Link>
                  </td>
                </tr>
              ))}
            </tbody>
          </table>

          <h2>Bảng Mọi Người ({people.length})</h2>
          <div className="admin-actions">
            <Link href="/admin/people/new">Thêm người</Link>
          </div>
          <table className="admin-table">
            <thead>
              <tr>
                <th>Rank</th>
                <th>Tên</th>
                <th>Nghề nghiệp</th>
                <th>Hành động</th>
              </tr>
            </thead>
            <tbody>
              {people.map((person) => (
                <tr key={person.rank}>
                  <td>{person.rank}</td>
                  <td>{person.name}</td>
                  <td>{person.career}</td>
                  <td>
                    <Link href={`/admin/people/${person.rank}/edit`}>Sửa</Link>
                    {" | "}
                    <Link href={`/admin/people/${person.rank}/delete`}>Xóa</Link>
                  </td>
                </tr>
              ))}
            </tbody>
          </table>
        </div>
      </div>
    </>
  );
}
