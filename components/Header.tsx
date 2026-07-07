import Link from "next/link";

type HeaderProps = {
  isLoggedIn?: boolean;
};

export function Header({ isLoggedIn = false }: HeaderProps) {
  return (
    <nav className="nav nav-fixed-top" role="navigation">
      <div className="container">
        <div className="row no-gutter">
          <div className="col-xs-2 col-sm-3 col-md-2">
            <Link className="brand" href="/" title="SinhNhatNoiTieng.com">
              Sinh Nhật Nổi Tiếng
            </Link>
          </div>
          <div className="col-xs-10 col-sm-4">
            <form className="search" role="form" action="/search" method="get">
              <input
                autoComplete="off"
                type="search"
                name="q"
                placeholder=" Nhập Người NT hoặc Ngày Tháng "
                className="form-control search search-bar"
                aria-label="Enter Celebrity or Date"
              />
              <button
                type="submit"
                className="btn btn-search"
                aria-label="Search"
                title="Tìm kiếm"
              >
                <i className="fa fa-search fa-flip-horizontal" />
              </button>
            </form>
          </div>
          <div className="col-sm-5 col-md-6">
            <ul className="quick-links">
              <li>
                <Link href="/" title="phổ biến">
                  <i className="fa fa-star fa-2x" />
                  <br />
                  phổ biến
                </Link>
              </li>
              <li>
                <Link href="/admin" title="thêm, sửa, xóa csdl">
                  <i className="fa fa-line-chart fa-2x" />
                  <br />
                  sửa csdl
                </Link>
              </li>
              <li>
                {isLoggedIn ? (
                  <form action="/api/auth/logout" method="post">
                    <button type="submit" className="link-button" title="đăng xuất">
                      <i className="fa fa-random fa-2x" />
                      <br />
                      đăng xuất
                    </button>
                  </form>
                ) : (
                  <Link href="/login" title="đăng nhập">
                    <i className="fa fa-history fa-2x fa-flip-horizontal" />
                    <br />
                    đăng nhập
                  </Link>
                )}
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>
  );
}
