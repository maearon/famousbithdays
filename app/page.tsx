import { Header } from "@/components/Header";
import { PeopleSection } from "@/components/PeopleSection";
import { getSession } from "@/lib/auth";
import { groupPeopleBySections } from "@/lib/people";
import { prisma } from "@/lib/prisma";

export const dynamic = "force-dynamic";

export default async function HomePage() {
  const [people, session] = await Promise.all([
    prisma.person.findMany({ orderBy: { rank: "asc" } }),
    getSession(),
  ]);

  const sections = groupPeopleBySections(people);

  return (
    <>
      <Header isLoggedIn={Boolean(session)} />
      <div className="page-wrapper">
        <div className="list-page">
          <div className="heading-container container">
            <div className="row">
              <div className="col-xs-12">
                <div className="adspot adspot7">
                  <img src="/images/ad.png" alt="Advertisement" />
                </div>
              </div>
            </div>
          </div>

          <div className="container people-list">
            <div className="row list-title-sub">
              <div className="col-xs-12">
                <h3 className="page-title">Phổ Biến Nhất</h3>
              </div>
            </div>

            <PeopleSection people={sections.top} />
            <PeopleSection people={sections.second} />
            <PeopleSection people={sections.third} />
            <PeopleSection people={sections.fourth} />
          </div>
        </div>
      </div>
    </>
  );
}
