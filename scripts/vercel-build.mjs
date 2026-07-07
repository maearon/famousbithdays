import { execSync } from "node:child_process";

execSync("npx prisma generate", { stdio: "inherit" });
execSync("npx prisma migrate deploy", { stdio: "inherit" });

if (process.env.SEED_ON_DEPLOY === "true") {
  execSync("npx prisma db seed", { stdio: "inherit" });
}

execSync("npx next build", { stdio: "inherit" });
