import Link from "next/link";
import { Header } from "@/components/Header";
import { getSession } from "@/lib/auth";

export default async function NewLoginPage() {
  const session = await getSession();

  return (
    <>
      <Header isLoggedIn={Boolean(session)} />
      <div className="page-wrapper">
        <div className="admin-page container">
          <h1>Thêm tài khoản đăng nhập</h1>
          <form action="/api/admin/login" method="post" className="form-grid">
            <label>
              ID
              <input type="text" name="id" required />
            </label>
            <label>
              Mật khẩu
              <input type="password" name="password" required />
            </label>
            <button type="submit">Thêm</button>
          </form>
          <p>
            <Link href="/admin">← Quay lại</Link>
          </p>
        </div>
      </div>
    </>
  );
}
