<?php include '../view/header.php'; ?>
<main>

    <h1>Category List</h1>

    <aside>
        <!-- display a list of categories -->
        <h2>Categories</h2>
        <nav>
        <ul>
        <?php foreach ($categories as $category) : ?>
            <li>
            <a href="?category_id=<?php echo $category['categoryID']; ?>">
                <?php echo $category['categoryName']; ?>
            </a>
            </li>
        <?php endforeach; ?>
        </ul>
        </nav>
    </aside>

    <table>
        <tr>
            <th>Name</th>
            <th>&nbsp;</th>
        </tr>        
        <!-- add category rows here -->
            <?php foreach ($categories as $category) : ?>
            <tr>
                <td><?php echo $category['categoryName']; ?></td>
                <td><form action="." method="post">
                    <input type="hidden" name="action"
                           value="delete_category">
                    <input type="hidden" name="category_id"
                           value="<?php echo $category['categoryID']; ?>">
                    <input type="submit" value="Delete">
                </form></td>
            </tr>
            <?php endforeach; ?>
    </table>

    <h2>Add Category</h2>
    <!-- add code for form here -->
        <p><a href="?action=show_add_cat_form">Add Category</a></p>
    <p><a href="index.php?action=list_products">List Products</a></p>

</main>
<?php include '../view/footer.php'; ?>