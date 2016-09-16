
<div class="container">
    <div class="row">
        <div class="col-lg-3 col-sm-6">
            <div class="card hovercard">
                <div class="cardheader">
                    <img alt="" src="../img/uploads/<?= $user->bannerImgSrc ?>">
                </div>
                <div class="avatar">
                    <img alt="" src="../img/uploads/<?= $user->profileImgSrc ?>">
                </div>
                <div class="info">
                    <div class="title">
                        <p><?= $user->name ?></p>
                    </div>
                    <div class="desc"><?= $user->attrOne ?></div>
                    <div class="desc"><?= $user->attrTwo ?></div>
                    <div class="desc"><?= $user->attrThree ?></div>
                </div>
            </div>
        </div>

    </div>
</div>