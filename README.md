# Royal Dutch Tree Services

WordPress website for Royal Dutch Tree Services

## Assumptions

* WordPress as a Git submodule in `/wp/`
* Custom content directory in `/content/` (cleaner, and also because it can't be in `/wp/`)
* `wp-config.php` in the root (because it can't be in `/wp/`)
* All writable directories are symlinked to similarly named locations under `/shared/`.