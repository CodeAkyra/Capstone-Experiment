<?php
define('BASE_PATH', __DIR__ . '/../'); // Adjust to your project's structure
include(BASE_PATH . 'includes/header.php');
?>

<div class="header">
    <h1 class="header-title">User</h1>
    <a href="forms/user-create.php" class="btn-create" id="create-requestBtn">Create New User</a>
</div>

<div class="module-content">

    <div class="blue-bar">

        <div class="table-bg">
            <table class="table-list-request">

                <!-- Hindi muna aq nag lagay ng mga class / ID masyado -->
                <thead class="column-title">
                    <tr class="th-style">
                        <th class="th-employee-name">Employee Name</th>
                        <th class="th-username">Username</th>
                        <th class="th-email">Email</th>
                        <th class="th-user-level">User Level</th>
                        <th class="th-action">Action</th>
                    </tr>
                </thead>

                <tbody class="td-style">
                    <tr>
                        <td class="td-employee-name">John Doe D. Macaspac</td>
                        <td class="td-username">johndoe.macaspac</td>
                        <td class="td-email">johndoe.macaspac@filasia.com</td>
                        <td class="td-user-level">Production</td>
                        <td class="td-action">
                            <a href="forms/user-edit.php" class="edit-button"><i class="btnEdita fa-solid fa-pen-to-square"></i></a>
                            <button class="archive-button"><i class="btnArchive fa-solid fa-box-archive"></i></button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

<!-- PAGES -->
<div class="pageBar">
    <div class="pageContainer">
        <p class="pageText">Showing
            <a class="page1">1</a>
            to
            <a class="page2">60</a>
            of
            <a class="ent-total">69</a>
            entries
        </p>
        <div class="pageBtn">
            <p class="btnPrev">Previous</p>
            <a id="pageNum">1</a>
            <a id="pageNum">2</a>
            <a id="pageNum">3</a>
            <a id="pageNum">4</a>
            <a id="pageNum">5</a>
            <p class="btnNext">Next</p>
        </div>
    </div>
</div>

<?php
include(__DIR__ . '/../includes/footer.php');
?>