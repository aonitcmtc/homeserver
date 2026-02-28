<style>
    /* style costom only page */
    /* .table-outer-rounded {
        border-radius: 18px;
        overflow: hidden;
        box-shadow: 0 4px 20px #00000014;
    } */

    /* .table-outer-rounded .table > :not(caption) > * > * {
        background-clip: padding-box;
    }

    .table-outer-rounded.table-bordered > :not(caption) > * > * {
        border-color: #0000001f;
    } */
</style>

<div class="container">
    <div class="row">
        <div class="col-12 mt-5 pt-3">
            <nav aria-label="breadcrumb">
                <!-- <ol class="breadcrumb rounded-pill bg-96A7E8 px-3">
                    <li class="breadcrumb-item"><a class="text-decoration-none" href="/admin/">Home</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Users</li>
                </ol> -->

                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a class="text-decoration-none" href="/admin/">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-decoration-none" href="#Management">management</a></li>
                    <li class="breadcrumb-item active" aria-current="page">user</li>
                </ol>
            </nav>
        </div>
    </div>
    <div class="row justify-content-end">
        <div class="col-12 text-center p-2">
            <h2>Admin :: Users</h2>
        </div>

        <div class="col-12 vh-100">
            <div class="table-responsive table-outer-rounded my-5">
                <!-- <table class="table table-success table-striped"> -->
                <table class="table table-striped table-hover">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">First</th>
                            <th scope="col">Last</th>
                            <th scope="col">Handle</th>
                            <th scope="col">City</th>
                            <th scope="col">Country</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>Chiang Mai</td>
                            <td>Thailand</td>
                            <td>mark@example.com</td>
                            <td>+66 123 4567</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Jacob</td>
                            <td>Thornton</td>
                            <td>@fat</td>
                            <td>Bangkok</td>
                            <td>Thailand</td>
                            <td>jacob@example.com</td>
                            <td>+66 987 6543</td>
                        </tr>
                        <!-- more rows... -->
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<!-- <script type="module" src="./../asset/iscookie/cookieconsent-config.js"></script> -->
