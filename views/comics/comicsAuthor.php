

<div class="container-form mx-auto bg-light rounded">
    <div class="row">
        <div class="col">
            <form action="<?=base_url?>comic/comic_authors_id" method="POST" class="p-3">
                <div class="mb-3">
                    <label class="form-label"> Comic author id: </label>
                    <input type="text" class="form-control" name="id" placeholder="e.g.183" required>
                </div>
                <button type="input" class="btn btn-danger btn-block d-grid gap-2 col-3 mx-auto">Send</button>
            </form>
        </div>
    </div>
</div>

