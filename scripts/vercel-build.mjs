import "dotenv/config";
import { execSync } from "node:child_process";

function run(command) {
  console.log(`\n> ${command}\n`);
  execSync(command, { stdio: "inherit" });
}

function deriveDirectFromPooled(pooledUrl) {
  try {
    const url = new URL(pooledUrl);

    if (!url.hostname.includes("-pooler")) {
      return null;
    }

    url.hostname = url.hostname.replace("-pooler", "");
    return url.toString();
  } catch {
    return null;
  }
}

function resolveDirectUrl() {
  return (
    process.env.DIRECT_URL ??
    process.env.DATABASE_URL_UNPOOLED ??
    process.env.POSTGRES_URL_NON_POOLING ??
    deriveDirectFromPooled(process.env.DATABASE_URL) ??
    deriveDirectFromPooled(process.env.POSTGRES_URL) ??
    deriveDirectFromPooled(process.env.POSTGRES_PRISMA_URL)
  );
}

function resolvePooledUrl() {
  return (
    process.env.DATABASE_URL ??
    process.env.POSTGRES_PRISMA_URL ??
    process.env.POSTGRES_URL
  );
}

const directUrl = resolveDirectUrl();
const pooledUrl = resolvePooledUrl();

if (!directUrl) {
  console.error(
    [
      "Build failed: missing direct database URL for Prisma migrations.",
      "Set one of these in Vercel Environment Variables:",
      "  - DIRECT_URL",
      "  - DATABASE_URL_UNPOOLED",
      "  - POSTGRES_URL_NON_POOLING (auto-injected by Vercel + Neon integration)",
      "  - DATABASE_URL (pooled Neon URL; direct URL will be derived automatically)",
    ].join("\n"),
  );
  process.exit(1);
}

if (!pooledUrl) {
  console.error(
    [
      "Build failed: missing pooled database URL for the app runtime.",
      "Set one of these in Vercel Environment Variables:",
      "  - DATABASE_URL",
      "  - POSTGRES_PRISMA_URL",
      "  - POSTGRES_URL",
    ].join("\n"),
  );
  process.exit(1);
}

process.env.DIRECT_URL = directUrl;
process.env.DATABASE_URL ??= pooledUrl;

console.log("Using direct DB host for migrations:", new URL(directUrl).hostname);
console.log("Using pooled DB host for runtime:", new URL(pooledUrl).hostname);

run("npx prisma generate");
run("npx prisma migrate deploy");

if (process.env.SEED_ON_DEPLOY === "true") {
  run("npx prisma db seed");
}

run("npx next build");
