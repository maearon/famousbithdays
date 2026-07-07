import "dotenv/config";
import bcrypt from "bcryptjs";
import { PrismaClient } from "../generated/prisma/client";
import { PrismaNeon } from "@prisma/adapter-neon";
import { getDirectDatabaseUrl } from "../lib/database-url";
import { DEFAULT_ADMIN, PEOPLE_SEED } from "../lib/seed-data";

const adapter = new PrismaNeon({ connectionString: getDirectDatabaseUrl() });
const prisma = new PrismaClient({ adapter });

async function main() {
  console.log("Seeding database...");

  await prisma.person.deleteMany();
  await prisma.login.deleteMany();

  await prisma.person.createMany({ data: PEOPLE_SEED });

  const hashedPassword = await bcrypt.hash(DEFAULT_ADMIN.password, 10);
  await prisma.login.create({
    data: {
      id: DEFAULT_ADMIN.id,
      password: hashedPassword,
    },
  });

  console.log(`Seeded ${PEOPLE_SEED.length} people and admin user "${DEFAULT_ADMIN.id}"`);
}

main()
  .catch((error) => {
    console.error(error);
    process.exit(1);
  })
  .finally(async () => {
    await prisma.$disconnect();
  });
