import type { Metadata, Viewport } from "next";
import Link from "next/link";
import "./globals.css";

export const metadata: Metadata = {
  title: "Sinh Nhật Nổi Tiếng",
  description:
    "Khám phá những người phổ biến nhất được xếp hạng dựa trên hoạt động người dùng.",
};

export const viewport: Viewport = {
  themeColor: "#E4138E",
};

export default function RootLayout({
  children,
}: Readonly<{
  children: React.ReactNode;
}>) {
  return (
    <html lang="vi">
      <head>
        <link rel="icon" href="/favicon.ico" type="image/x-icon" />
        <link rel="manifest" href="/manifest.json" />
        <link
          rel="stylesheet"
          href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
        />
        <link rel="stylesheet" href="/static/css/bootstrap.min.css" />
        <link rel="stylesheet" href="/static/css/main.css" />
      </head>
      <body>
        {children}
        <footer className="site-footer">
          <div className="container">
            <p>
              <Link href="/about/about.html">Giới thiệu</Link>
            </p>
          </div>
        </footer>
      </body>
    </html>
  );
}
