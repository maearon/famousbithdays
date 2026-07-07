import type { Person } from "@/generated/prisma/client";
import { personHref } from "@/lib/people";

type PersonCardProps = {
  person: Person;
};

export function PersonCard({ person }: PersonCardProps) {
  const href = personHref(person.link);

  return (
    <a
      href={href}
      className="face person-item"
      style={{
        background: `url(${person.img}) no-repeat center center`,
        backgroundSize: "cover",
      }}
    >
      <i className="fa fa-star fa-rank fa-2x">
        <span className="rank">{person.rank}</span>
      </i>
      <div className="info">
        <div className="name">
          {person.name}
          {person.age}
        </div>
        <div className="title">{person.career}</div>
      </div>
    </a>
  );
}

type PeopleSectionProps = {
  people: Person[];
};

export function PeopleSection({ people }: PeopleSectionProps) {
  return (
    <div className="row">
      {people.map((person) => (
        <PersonCard key={person.rank} person={person} />
      ))}
    </div>
  );
}
