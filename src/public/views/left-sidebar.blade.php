<div class="sidebar-header">
            <h3 class="text-uppercase text-center">
                <a href="{{ url('/') }}">
                Blue Panel
                </a>
            </h3>
        </div>

        <ul class="list-unstyled components">
            <div class="dashboard border-gradient border-gradient-purple m-2 text-center">
                <a href="{{ url('adminpanel') }}" class="dashboard-link text-uppercase text-decoration-none">
                    <span>Dashboard</span>
                </a>
            </div>
            <br>
            <div class="bar-top-hr m-2 text-center"></div>
            <br>
            <li class="active">
                <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle item-heading">Items</a>
                <ul class="collapse list-unstyled" id="homeSubmenu">
                    <li>
                        <a href="#">Option 1</a>
                    </li>
                    <li>
                        <a href="#">Option 2</a>
                    </li>
                    <li>
                        <a href="#">Option 3</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Pages</a>
                <ul class="collapse list-unstyled" id="pageSubmenu">
                    <li>
                        <a href="#">Page 1</a>
                    </li>
                    <li>
                        <a href="#">Page 2</a>
                    </li>
                    <li>
                        <a href="#">Page 3</a>
                    </li>
                </ul>
            </li>
            <li>
                <a href="#">Item 2</a>
            </li>
            <li>
                <a href="#">Item 3</a>
            </li>
            <li>
                <a href="#">Item 4</a>
            </li>

            <br>
            <div class="bar-bottom-hr m-2 text-center"></div>
            <br>
        </ul>
