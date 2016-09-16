<!--Page for single advertisement -->
 <!-- Page Content -->
<div class="container">
    <div class="row">
        <div class="col-md-3">
            <!-- <p class="lead">Items</p> -->
            <div class="list-group">
                <a href="/inventory" class="list-group-item active">Return to Inventory</a>
            </div>
            <div class="list-group">
                <a href="/edit_ad" class="list-group-item active">Edit</a>
            </div>
            <!-- <div class="list-group">
                <a href="/delete_ad" class="list-group-item active">Delete</a>
            </div>
            <div class="list-group">
                <a href="/contact_ad" class="list-group-item active">Contact Seller</a>
            </div> -->
        </div>
        <div class="col-md-9">
            <div>
                <img class="img-responsive" src=<?="/img/uploads/" . $item->img_url?> alt=<?=$item->img_url?>>
                <div class="caption-full">
                    <h4 class="make_white"><?='$'.$item->price?></h4>
                    <h4><a href="/item" class="make_white"><?=$item->name?></a>
                    </h4>
                    <p><?=$item->description?></p>
                </div>
            </div>
        </div>
    </div>
</div>
