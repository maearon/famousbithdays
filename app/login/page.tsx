import Link from "next/link";
import { redirect } from "next/navigation";
import { getSession } from "@/lib/auth";

type LoginPageProps = {
  searchParams: Promise<{ error?: string }>;
};

export default async function LoginPage({ searchParams }: LoginPageProps) {
  const session = await getSession();
  const params = await searchParams;

  if (session) {
    redirect("/admin");
  }

  return (
    <div className="login-page">
      <div className="login-card">
        <h1>Đăng Nhập</h1>
        {params.error ? <p className="form-error">Sai tên đăng nhập hoặc mật khẩu.</p> : null}
        <form action="/api/auth/login" method="post">
          <label htmlFor="user_login">
            Tên người dùng
            <input type="text" name="us" id="user_login" required />
          </label>
          <label htmlFor="user_pass">
            Mật khẩu
            <input type="password" name="pa" id="user_pass" required />
          </label>
          <button type="submit">Đăng nhập</button>
        </form>
        <p style={{ marginTop: "1rem" }}>
          <Link href="/">← Quay lại trang chủ</Link>
        </p>
      </div>
    </div>
  );
}
