<?php
$page = $_SERVER['REQUEST_URI'];
?>

<header class="d-flex flex-wrap justify-content-center py-3 mb-4 border-bottom">
    <a href="/notes/" class="d-flex align-items-center mb-3 mb-md-0 me-md-auto link-body-emphasis text-decoration-none ps-4">
        <span class="fs-4">Notes App</span>
    </a>

    <ul class="nav nav-pills mx-4">
        <li class="nav-item">
            <a href="./#" class="nav-link <?= $page === '/notes/' ? 'active' : '' ?>">Your Notes</a>
        </li>
        <li class="nav-item">
            <a href="./create" class="nav-link <?= $page === '/notes/create' ? 'active' : '' ?>"">New Note</a>
        </li>
    </ul>
</header>