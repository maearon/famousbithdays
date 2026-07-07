import Link from "next/link";
import { notFound } from "next/navigation";
import { Header } from "@/components/Header";
import { getSession } from "@/lib/auth";
import { prisma } from "@/lib/prisma";

type EditPersonPageProps = {
  params: Promise<{ rank: string }>;
};

export default async function EditPersonPage({ params }: EditPersonPageProps) {
  const { rank: rankParam } = await params;
  const rank = Number(rankParam);
  const [person, session] = await Promise.all([
    prisma.person.findUnique({ where: { rank } }),
    getSession(),
  ]);

  if (!person) {
    notFound();
  }

  return (
    <>
      <Header isLoggedIn={Boolean(session)} />
      <div className="page-wrapper">
        <div className="admin-page container">
          <h1>Sửa: {person.name}</h1>
          <form action={`/api/people/${person.rank}`} method="post" className="form-grid">
            <label>
              Tên
              <input type="text" name="name" defaultValue={person.name} required />
            </label>
            <label>
              Ảnh (URL)
              <input type="text" name="img" defaultValue={person.img} />
            </label>
            <label>
              Tuổi
              <input type="text" name="age" defaultValue={person.age} />
            </label>
            <label>
              Nghề nghiệp
              <input type="text" name="career" defaultValue={person.career} />
            </label>
            <label>
              Link
              <input type="text" name="link" defaultValue={person.link} />
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
