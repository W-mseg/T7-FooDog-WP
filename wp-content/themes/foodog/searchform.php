<!-- Search form -->
<form class="form-inline d-flex justify-content-center md-form form-sm" action ="<?= esc_url(home_url('/'))?>">
    <input class="form-control form-control-sm mr-3 w-75" name="s" type="search" placeholder="" aria-label="Search" value="<?= get_search_query() ?>">
    <button class="btn btn-outline-success my-2 my-sm-0" type="submit"> <i class="fas fa-search" aria-hidden="true"></i></button>
</form>


