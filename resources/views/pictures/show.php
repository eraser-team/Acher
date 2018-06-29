<div class="card border-secondary">
    <h2 class="card-header">
        <?=$picture['title']; ?>
        <span class="mb-2 d-inline-block">
            <a href="/pictures/edit/<?=$picture['id']; ?>" class="btn btn-success btn-sm">Edit</a>
            <form action="/pictures/<?=$picture['id']; ?>" method="post" class="d-inline">
                <input type="hidden" name="_method" value="delete">
                <button type="submit" class="btn btn-danger btn-sm">Delete</button>
            </form>
        </span>
    </h2>
    <div class="card-body">
        <img src="<?=$picture['url']; ?>" alt="<?=$picture['title']?>" class="mx-auto d-block img-fluid" />
    </div>
</div>