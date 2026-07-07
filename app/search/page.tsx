import { Header } from "@/components/Header";
import { PeopleSection } from "@/components/PeopleSection";
import { getSession } from "@/lib/auth";
import { prisma } from "@/lib/prisma";

type SearchPageProps = {
  searchParams: Promise<{ q?: string }>;
};

export const dynamic = "force-dynamic";

export default async function SearchPage({ searchParams }: SearchPageProps) {
  const params = await searchParams;
  const query = params.q?.trim() ?? "";
  const session = await getSession();

  const people = query
    ? await prisma.person.findMany({
        where: {
          OR: [
            { name: { contains: query, mode: "insensitive" } },
            { career: { contains: query, mode: "insensitive" } },
          ],
        },
        orderBy: { rank: "asc" },
      })
    : [];

  return (
    <>
      <Header isLoggedIn={Boolean(session)} />
      <div className="page-wrapper">
        <div className="container people-list">
          <h3 className="page-title">
            {query ? `Kết quả cho "${query}"` : "Tìm kiếm"}
          </h3>
          {query ? <PeopleSection people={people} /> : <p>Nhập từ khóa để tìm kiếm.</p>}
        </div>
      </div>
    </>
  );
}
