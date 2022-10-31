<!-- top navigation bar -->
    <!-- offcanvas -->
    <div
      class="offcanvas offcanvas-start sidebar-nav bg-dark"
      tabindex="-1"
      id="sidebar"
    >
      <div class="offcanvas-body p-0">
        <nav class="navbar-dark">
          <ul class="navbar-nav">

            <li>
              <div class="text-muted small fw-bold text-uppercase px-3">
                CORE
              </div>
            </li>

            <li>
              <a href="{{ route('home') }}" class="nav-link px-3 active">
                <span class="me-2"><i class="bi bi-speedometer2"></i></span>
                <span>Dashboard</span>
              </a>
            </li>

            <li class="my-4"><hr class="dropdown-divider bg-light" /></li>

            <li>
              <div class="text-muted small fw-bold text-uppercase px-3 mb-3">
                Profile
              </div>
            </li>

            <li>
              <a href="#" class="nav-link px-3">
                <span class="me-2"><i class="bi bi-person-circle"></i></i></span>
                <span>Edit Profile</span>
              </a>
            </li>

            <li class="my-4"><hr class="dropdown-divider bg-light" /></li>
            <li>
              <div class="text-muted small fw-bold text-uppercase px-3 mb-3">
                Tests
              </div>
            </li>
            <li>
                <a
                  class="nav-link px-3 sidebar-link"
                  data-bs-toggle="collapse"
                  href="#layouts"
                >
                  <span class="me-2"><i class="bi bi-pencil-square"></i></span>
                  <span>Soal</span>
                  <span class="ms-auto">
                    <span class="right-icon">
                      <i class="bi bi-chevron-down"></i>
                    </span>
                  </span>
                </a>

                <div class="collapse" id="layouts">
                  <ul class="navbar-nav ps-3">
                    <li>
                      <a href="{{ route('get-uts') }}" class="nav-link px-3">
                        <span class="me-2"
                          ><i class="bi bi-speedometer2"></i
                        ></span>
                        <span>Soal UTS</span>
                      </a>
                    </li>
                  </ul>
                </div>

                <div class="collapse" id="layouts">
                  <ul class="navbar-nav ps-3">
                    <li>
                      <a href="{{ route('get-uas') }}" class="nav-link px-3">
                        <span class="me-2"
                          ><i class="bi bi-speedometer2"></i
                        ></span>
                        <span>Soal UAS</span>
                      </a>
                    </li>
                  </ul>
                </div>

                <div class="collapse" id="layouts">
                  <ul class="navbar-nav ps-3">
                    <li>
                      <a href="{{ route('get-tugas') }}" class="nav-link px-3">
                        <span class="me-2"
                          ><i class="bi bi-speedometer2"></i
                        ></span>
                        <span>Tugas</span>
                      </a>
                    </li>
                  </ul>
                </div>

              </li>

            <li>
              <a href="#" class="nav-link px-3">
                <span class="me-2"><i class="bi bi-table"></i></span>
                <span>Nilai</span>
              </a>
            </li>
          </ul>
        </nav>
    </div>
</div>
