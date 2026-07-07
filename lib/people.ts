import type { Person } from "@/generated/prisma/client";

export function groupPeopleBySections(people: Person[]) {
  return {
    top: people.filter((person) => person.rank < 13),
    second: people.filter((person) => person.rank > 12 && person.rank < 25),
    third: people.filter((person) => person.rank > 24 && person.rank < 37),
    fourth: people.filter((person) => person.rank > 36 && person.rank < 49),
  };
}

export function personHref(link: string) {
  if (!link) {
    return "#";
  }

  return link;
}
