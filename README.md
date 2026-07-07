# Sinh Nhật Nổi Tiếng (Next.js + Prisma 7 + Neon)

Phiên bản mới của project Famous Birthdays Việt Nam, viết lại bằng **Next.js 16**, **Prisma 7**, **PostgreSQL trên Neon**, deploy **Vercel**.

## Tính năng

- Trang chủ: danh sách 48 người nổi tiếng (4 nhóm rank)
- Tìm kiếm theo tên / nghề nghiệp
- Đăng nhập admin (`admin` / `123` sau khi seed)
- Quản trị CRUD: bảng `people` và `login`

## Cấu trúc

```
app/              # Next.js App Router
components/       # UI components
lib/              # Prisma client, auth, seed data
prisma/           # Schema, migrations, seed
public/           # Static assets (CSS, thumbnails, images)
generated/prisma/ # Prisma Client (auto-generated)
```

## Yêu cầu

- Node.js 20+
- Tài khoản [Neon](https://neon.tech)
- Tài khoản [Vercel](https://vercel.com)

## 1. Tạo database Neon

1. Tạo project mới trên Neon
2. Lấy **2 connection string** từ Neon Console → Connect:
   - **Pooled** → `DATABASE_URL` (hostname có `-pooler`)
   - **Direct** → `DIRECT_URL` (hostname không có `-pooler`)

## 2. Cấu hình môi trường

Sao chép `.env.example` thành `.env`:

```bash
cp .env.example .env
```

Điền URL Neon:

```env
DATABASE_URL="postgresql://...@ep-xxx-pooler....neon.tech/neondb?sslmode=require"
DIRECT_URL="postgresql://...@ep-xxx....neon.tech/neondb?sslmode=require"
SEED_ON_DEPLOY="false"
```

## 3. Chạy local

```bash
npm install
npx prisma migrate deploy
npm run db:seed
npm run dev
```

Mở http://localhost:3000

## 4. Deploy Vercel + Neon

### Kiểm tra lỗi 404 NOT_FOUND

Theo [Vercel NOT_FOUND docs](https://vercel.com/docs/errors/not_found), lỗi này **không phải** 404 của Next.js — nghĩa là **không có deployment hợp lệ** để phục vụ URL.

Checklist:

1. Vercel Dashboard → **Deployments** → deployment mới nhất phải **Ready** (không phải Error)
2. Nếu **Error** → mở **Build Logs**, thường do thiếu env DB
3. **Settings → Environment Variables** → bật cho **Production**:
   - `DATABASE_URL` hoặc `POSTGRES_URL`
   - `POSTGRES_URL_NON_POOLING` (khuyến nghị)
   - `SEED_ON_DEPLOY=true` (lần đầu)
4. **Settings → General → Root Directory** phải để trống (project Next.js ở root repo)
5. **Settings → General → Framework Preset** = **Next.js**
6. Sau khi sửa env → **Redeploy** (Deployments → ... → Redeploy)

### Cách A: Vercel Dashboard

1. Import repo GitHub vào Vercel
2. Thêm Environment Variables (Vercel + Neon integration thường tự inject):
   - `DATABASE_URL` hoặc `POSTGRES_URL` (pooled, hostname có `-pooler`)
   - `POSTGRES_URL_NON_POOLING` hoặc `DATABASE_URL_UNPOOLED` (direct, không có `-pooler`)
   - `SEED_ON_DEPLOY=true` (chỉ lần deploy đầu)

   **Lưu ý:** Nếu chỉ có `DATABASE_URL` pooled, build script sẽ tự suy ra direct URL (bỏ `-pooler` trong hostname). Tuy nhiên nên set thêm `POSTGRES_URL_NON_POOLING` để chắc chắn migrate thành công.
3. Deploy — build chạy `prisma migrate deploy` tự động
4. Sau khi seed xong, đổi `SEED_ON_DEPLOY=false` và redeploy

### Cách B: Vercel + Neon Integration

1. Vercel Dashboard → Storage → Connect Neon
2. Integration tự inject `DATABASE_URL` / `POSTGRES_URL`
3. Thêm thủ công `DIRECT_URL` (direct connection cho migrate)
4. Set `SEED_ON_DEPLOY=true` cho lần đầu

### Seed data

Seed gồm đủ **48 người** + **admin** (mật khẩu `123`, đã hash bcrypt):

```bash
npm run db:seed
```

Dữ liệu nguồn: `lib/seed-data.ts` (chuyển từ `sinhnhatnoitieng.sql`).

## Scripts

| Lệnh | Mô tả |
|------|--------|
| `npm run dev` | Chạy dev server |
| `npm run build` | Build Next.js |
| `npm run vercel-build` | Migrate + optional seed + build (Vercel) |
| `npm run db:seed` | Seed đầy đủ 48 people + admin |
| `npm run db:migrate` | Tạo migration mới (dev) |
| `npm run db:deploy` | Apply migrations (production) |

## Đăng nhập mặc định

- URL: `/login`
- User: `admin`
- Pass: `123`

## Ghi chú

- File PHP cũ (`index.php`, `xuly.php`, ...) vẫn còn trong repo nhưng **không dùng** khi deploy Vercel
- Ảnh thumbnail nằm trong `public/thumbnails/`
- Prisma 7 dùng `@prisma/adapter-neon` + `prisma.config.ts` (không khai báo `url` trong `schema.prisma`)
