<nav class="navbar navbar-expand-lg bg-light">
    <div class="container-fluid">

        <!-- Website Name -->
        <a class="navbar-brand" href="/NTI/Assignment_3/index.php">
            MySQL Project
        </a>

        <!-- Navbar Links -->
        <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav ms-auto">

                <!-- Home -->
                <li class="nav-item">
                    <a class="nav-link active" href="/NTI/Assignment_3/index.php">
                        Home
                    </a>
                </li>

                <!-- Customers Dropdown -->
                <li class="nav-item dropdown">

                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">

                        Customers
                    </a>

                    <ul class="dropdown-menu">

                        <li>
                            <a class="dropdown-item" href="/NTI/Assignment_3/customer/customers_salary.php">
                                Salary > 20000
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item" href="/NTI/Assignment_3/customer/customer_id.php">
                                Search by ID
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item" href="/NTI/Assignment_3/customer/customer_name.php">
                                Search by Name
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item" href="/NTI/Assignment_3/customer/customers_city.php">
                                Customers by City
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item" href="/NTI/Assignment_3/customer/richest_customers.php">
                                Richest 3 Customers
                            </a>
                        </li>

                    </ul>
                </li>

                <!-- Orders Dropdown -->
                <li class="nav-item dropdown">

                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">
                        Orders
                    </a>

                    <ul class="dropdown-menu">

                        <li>
                            <a class="dropdown-item" href="/NTI/Assignment_3/orders/orders_per_customer.php">
                                Orders per Customer
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item" href="/NTI/Assignment_3/orders/product_sales.php">
                                Product Sales Details
                            </a>
                        </li>

                    </ul>
                </li>

                <!-- Products Dropdown -->
                <li class="nav-item dropdown">

                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                        aria-expanded="false">

                        Products
                    </a>

                    <ul class="dropdown-menu">

                        <li>
                            <a class="dropdown-item" href="/NTI/Assignment_3/products/best_selling.php">
                                Best Selling Products
                            </a>
                        </li>

                        <li>
                            <a class="dropdown-item" href="/NTI/Assignment_3/products/products_quantity.php">
                                Products by Quantity
                            </a>
                        </li>

                    </ul>
                </li>

                <!-- Employees -->
                <li class="nav-item">
                    <a class="nav-link" href="/NTI/Assignment_3/employees/employees_managers.php">
                        Employees
                    </a>
                </li>

                <!-- Login -->
                <li class="nav-item">
                    <a class="nav-link" href="/NTI/Assignment_3/login.php">
                        Login
                    </a>
                </li>

            </ul>

        </div>
    </div>
</nav>