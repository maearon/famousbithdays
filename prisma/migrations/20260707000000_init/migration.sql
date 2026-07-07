-- CreateTable
CREATE TABLE "people" (
    "rank" INTEGER NOT NULL,
    "name" TEXT NOT NULL,
    "img" TEXT NOT NULL,
    "age" TEXT NOT NULL,
    "career" TEXT NOT NULL,
    "link" TEXT NOT NULL,

    CONSTRAINT "people_pkey" PRIMARY KEY ("rank")
);

-- CreateTable
CREATE TABLE "login" (
    "id" TEXT NOT NULL,
    "pass" TEXT NOT NULL,

    CONSTRAINT "login_pkey" PRIMARY KEY ("id")
);
