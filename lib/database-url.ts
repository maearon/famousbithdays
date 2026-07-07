function deriveDirectFromPooled(pooledUrl?: string): string | undefined {
  if (!pooledUrl) {
    return undefined;
  }

  try {
    const url = new URL(pooledUrl);

    if (!url.hostname.includes("-pooler")) {
      return undefined;
    }

    url.hostname = url.hostname.replace("-pooler", "");
    return url.toString();
  } catch {
    return undefined;
  }
}

function resolveDirectDatabaseUrl(): string | undefined {
  return (
    process.env.DIRECT_URL ??
    process.env.DATABASE_URL_UNPOOLED ??
    process.env.POSTGRES_URL_NON_POOLING ??
    deriveDirectFromPooled(process.env.DATABASE_URL) ??
    deriveDirectFromPooled(process.env.POSTGRES_URL) ??
    deriveDirectFromPooled(process.env.POSTGRES_PRISMA_URL)
  );
}

export function getPooledDatabaseUrl(): string {
  const url =
    process.env.DATABASE_URL ??
    process.env.POSTGRES_PRISMA_URL ??
    process.env.POSTGRES_URL;

  if (!url) {
    throw new Error(
      "Missing pooled database URL. Set DATABASE_URL, POSTGRES_PRISMA_URL, or POSTGRES_URL.",
    );
  }

  return url;
}

export function getDirectDatabaseUrl(): string {
  const url = resolveDirectDatabaseUrl();

  if (!url) {
    throw new Error(
      "Missing direct database URL. Set DIRECT_URL, DATABASE_URL_UNPOOLED, or POSTGRES_URL_NON_POOLING.",
    );
  }

  return url;
}

export function getDirectDatabaseUrlOrPlaceholder(): string {
  return (
    resolveDirectDatabaseUrl() ??
    "postgresql://build:build@127.0.0.1:5432/build?schema=public"
  );
}
