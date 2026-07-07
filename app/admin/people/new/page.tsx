import Link from "next/link";
import { Header } from "@/components/Header";
import { getSession } from "@/lib/auth";

export default async function NewPersonPage() {
  const session = await getSession();

  return (
    <>
      <Header isLoggedIn={Boolean(session)} />
      <div className="page-wrapper">
        <div className="admin-page container">
          <h1>Thêm người nổi tiếng</h1>
          <form action="/api/people" method="post" className="form-grid">
            <label>
              Rank
              <input type="number" name="rank" required min={1} />
            </label>
            <label>
              Tên
              <input type="text" name="name" required />
            </label>
            <label>
              Ảnh (URL)
              <input type="text" name="img" />
            </label>
            <label>
              Tuổi
              <input type="text" name="age" />
            </label>
            <label>
              Nghề nghiệp
              <input type="text" name="career" />
            </label>
            <label>
              Link
              <input type="text" name="link" />
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
