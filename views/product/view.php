<?php

/* @var $this yii\web\View */

use yii\helpers\Html;
use yii\web\View;

?>

<section>
    <div class="container">
        <div class="row">
            <div class="col-sm-3">
                <div class="left-sidebar">
                    <h2>Category</h2>
                    <ul class="catalog category-products">
                        <?= \app\components\MenuWidget::widget(['tpl' => 'menu']); ?>
                    </ul>

                    <div class="brands_products"><!--brands_products-->
                        <h2>Brands</h2>
                        <div class="brands-name">
                            <ul class="nav nav-pills nav-stacked">
                                <li><a href=""> <span class="pull-right">(50)</span>Acne</a></li>
                                <li><a href=""> <span class="pull-right">(56)</span>Grüne Erde</a></li>
                                <li><a href=""> <span class="pull-right">(27)</span>Albiro</a></li>
                                <li><a href=""> <span class="pull-right">(32)</span>Ronhill</a></li>
                                <li><a href=""> <span class="pull-right">(5)</span>Oddmolly</a></li>
                                <li><a href=""> <span class="pull-right">(9)</span>Boudestijn</a></li>
                                <li><a href=""> <span class="pull-right">(4)</span>Rösch creative culture</a></li>
                            </ul>
                        </div>
                    </div><!--/brands_products-->

                    <div class="price-range"><!--price-range-->
                        <h2>Price Range</h2>
                        <div class="well">
                            <input type="text" class="span2" value="" data-slider-min="0" data-slider-max="600" data-slider-step="5" data-slider-value="[250,450]" id="sl2" ><br />
                            <b>$ 0</b> <b class="pull-right">$ 600</b>
                        </div>
                    </div><!--/price-range-->

                    <div class="shipping text-center"><!--shipping-->
                        <img src="/images/home/shipping.jpg" alt="" />
                    </div><!--/shipping-->

                </div>
            </div>

            <?php
            $mainImg = $product->getImage();
            $gallery = $product->getImages();

            ?>

            <div class="col-sm-9 padding-right">
                <div class="product-details"><!--product-details-->
                    <div class="col-sm-5">
                        <div class="view-product">

                            <?= Html::img($mainImg->getUrl(), ['alt' => $product->name])?>
                            <h3>ZOOM</h3>
                        </div>
                        <div id="similar-product" class="carousel slide" data-ride="carousel">

                            <!-- Wrapper for slides -->
                            <div class="carousel-inner">
                                <?php $count = count($gallery); $i = 0; foreach ($gallery as $img):?>
                                    <?php if ($i % 3 == 0):?>
                                        <div class="item <?php if ($i == 0) echo 'active'?>">
                                    <?php endif;?>
                                    <a href=""><?= Html::img($img->getUrl('84x85'), ['alt' => ''])?></a>
                                    <?php $i++; if ($i % 3 == 0 || $i == $count):?>
                                        </div>
                                    <?php endif;?>
                                <?php endforeach;?>
                            </div>


                            <!-- Controls -->
                            <a class="left item-control" href="#similar-product" data-slide="prev">
                                <i class="fa fa-angle-left"></i>
                            </a>
                            <a class="right item-control" href="#similar-product" data-slide="next">
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </div>

                    </div>
                    <div class="col-sm-7">
                        <div class="product-information"><!--/product-information-->

                            <?php if ($product->new): ?>
                                <?= Html::img("@web/images/home/new.png", ['alt' => 'Новинка', 'class' => 'newarrival'])?>
                            <?php endif; ?>
                            <?php if ($product->sale): ?>
                                <?= Html::img("@web/images/home/sale.png", ['alt' => 'Распродажа', 'class' => 'newarrival'])?>
                            <?php endif; ?>
                            <h2><?= $product->name?></h2>
                            <p>Web ID: 1089772</p>
                            <img src="/images/product-details/rating.png" alt="" />
                            <span>
									<span><?= $product->price?></span>
									<label>Quantity:</label>
									<input type="text" value="1" id="qty" />
									<a href="<?= \yii\helpers\Url::to(['cart/add', 'id' => $product->id])?>" data-id="<?= $product->id?>" class="btn btn-default cart add-to-cart">
										<i class="fa fa-shopping-cart"></i>
										Add to cart
									</a>
								</span>
                            <p><b>Availability:</b> In Stock</p>
                            <p><b>Condition:</b> New</p>
                            <p><b>Brand:</b><a href="<?= \yii\helpers\Url::to(['category/view', 'id' => $product->category->id]) ?>
"><?= $product->category->name?></a></p>
                            <a href=""><img src="/images/product-details/share.png" class="share img-responsive"  alt="" /></a>
                        <?= $product->content?>
                        </div><!--/product-information-->
                    </div>
                </div><!--/product-details-->

<!--                <div class="category-tab shop-details-tab"><!--category-tab-->
<!--                    <div class="col-sm-12">-->
<!--                        <ul class="nav nav-tabs">-->
<!--                            <li><a href="#details" data-toggle="tab">Details</a></li>-->
<!--                            <li><a href="#companyprofile" data-toggle="tab">Company Profile</a></li>-->
<!--                            <li><a href="#tag" data-toggle="tab">Tag</a></li>-->
<!--                            <li class="active"><a href="#reviews" data-toggle="tab">Reviews (5)</a></li>-->
<!--                        </ul>-->
<!--                    </div>-->
<!--                    <div class="tab-content">-->
<!--                        <div class="tab-pane fade" id="details" >-->
<!--                            <div class="col-sm-3">-->
<!--                                <div class="product-image-wrapper">-->
<!--                                    <div class="single-products">-->
<!--                                        <div class="productinfo text-center">-->
<!--                                            <img src="/images/home/gallery1.jpg" alt="" />-->
<!--                                            <h2>$56</h2>-->
<!--                                            <p>Easy Polo Black Edition</p>-->
<!--                                            <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="col-sm-3">-->
<!--                                <div class="product-image-wrapper">-->
<!--                                    <div class="single-products">-->
<!--                                        <div class="productinfo text-center">-->
<!--                                            <img src="/images/home/gallery2.jpg" alt="" />-->
<!--                                            <h2>$56</h2>-->
<!--                                            <p>Easy Polo Black Edition</p>-->
<!--                                            <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="col-sm-3">-->
<!--                                <div class="product-image-wrapper">-->
<!--                                    <div class="single-products">-->
<!--                                        <div class="productinfo text-center">-->
<!--                                            <img src="/images/home/gallery3.jpg" alt="" />-->
<!--                                            <h2>$56</h2>-->
<!--                                            <p>Easy Polo Black Edition</p>-->
<!--                                            <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="col-sm-3">-->
<!--                                <div class="product-image-wrapper">-->
<!--                                    <div class="single-products">-->
<!--                                        <div class="productinfo text-center">-->
<!--                                            <img src="/images/home/gallery4.jpg" alt="" />-->
<!--                                            <h2>$56</h2>-->
<!--                                            <p>Easy Polo Black Edition</p>-->
<!--                                            <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!---->
<!--                        <div class="tab-pane fade" id="companyprofile" >-->
<!--                            <div class="col-sm-3">-->
<!--                                <div class="product-image-wrapper">-->
<!--                                    <div class="single-products">-->
<!--                                        <div class="productinfo text-center">-->
<!--                                            <img src="/images/home/gallery1.jpg" alt="" />-->
<!--                                            <h2>$56</h2>-->
<!--                                            <p>Easy Polo Black Edition</p>-->
<!--                                            <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="col-sm-3">-->
<!--                                <div class="product-image-wrapper">-->
<!--                                    <div class="single-products">-->
<!--                                        <div class="productinfo text-center">-->
<!--                                            <img src="/images/home/gallery3.jpg" alt="" />-->
<!--                                            <h2>$56</h2>-->
<!--                                            <p>Easy Polo Black Edition</p>-->
<!--                                            <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="col-sm-3">-->
<!--                                <div class="product-image-wrapper">-->
<!--                                    <div class="single-products">-->
<!--                                        <div class="productinfo text-center">-->
<!--                                            <img src="/images/home/gallery2.jpg" alt="" />-->
<!--                                            <h2>$56</h2>-->
<!--                                            <p>Easy Polo Black Edition</p>-->
<!--                                            <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="col-sm-3">-->
<!--                                <div class="product-image-wrapper">-->
<!--                                    <div class="single-products">-->
<!--                                        <div class="productinfo text-center">-->
<!--                                            <img src="/images/home/gallery4.jpg" alt="" />-->
<!--                                            <h2>$56</h2>-->
<!--                                            <p>Easy Polo Black Edition</p>-->
<!--                                            <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!---->
<!--                        <div class="tab-pane fade" id="tag" >-->
<!--                            <div class="col-sm-3">-->
<!--                                <div class="product-image-wrapper">-->
<!--                                    <div class="single-products">-->
<!--                                        <div class="productinfo text-center">-->
<!--                                            <img src="/images/home/gallery1.jpg" alt="" />-->
<!--                                            <h2>$56</h2>-->
<!--                                            <p>Easy Polo Black Edition</p>-->
<!--                                            <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="col-sm-3">-->
<!--                                <div class="product-image-wrapper">-->
<!--                                    <div class="single-products">-->
<!--                                        <div class="productinfo text-center">-->
<!--                                            <img src="/images/home/gallery2.jpg" alt="" />-->
<!--                                            <h2>$56</h2>-->
<!--                                            <p>Easy Polo Black Edition</p>-->
<!--                                            <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="col-sm-3">-->
<!--                                <div class="product-image-wrapper">-->
<!--                                    <div class="single-products">-->
<!--                                        <div class="productinfo text-center">-->
<!--                                            <img src="/images/home/gallery3.jpg" alt="" />-->
<!--                                            <h2>$56</h2>-->
<!--                                            <p>Easy Polo Black Edition</p>-->
<!--                                            <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="col-sm-3">-->
<!--                                <div class="product-image-wrapper">-->
<!--                                    <div class="single-products">-->
<!--                                        <div class="productinfo text-center">-->
<!--                                            <img src="/images/home/gallery4.jpg" alt="" />-->
<!--                                            <h2>$56</h2>-->
<!--                                            <p>Easy Polo Black Edition</p>-->
<!--                                            <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>-->
<!--                                        </div>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!---->
<!--                        <div class="tab-pane fade active in" id="reviews" >-->
<!--                            <div class="col-sm-12">-->
<!--                                <ul>-->
<!--                                    <li><a href=""><i class="fa fa-user"></i>EUGEN</a></li>-->
<!--                                    <li><a href=""><i class="fa fa-clock-o"></i>12:41 PM</a></li>-->
<!--                                    <li><a href=""><i class="fa fa-calendar-o"></i>31 DEC 2014</a></li>-->
<!--                                </ul>-->
<!--                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>-->
<!--                                <p><b>Write Your Review</b></p>-->
<!---->
<!--                                <form action="#">-->
<!--										<span>-->
<!--											<input type="text" placeholder="Your Name"/>-->
<!--											<input type="email" placeholder="Email Address"/>-->
<!--										</span>-->
<!--                                    <textarea name="" ></textarea>-->
<!--                                    <b>Rating: </b> <img src="/images/product-details/rating.png" alt="" />-->
<!--                                    <button type="button" class="btn btn-default pull-right">-->
<!--                                        Submit-->
<!--                                    </button>-->
<!--                                </form>-->
<!--                            </div>-->
<!--                        </div>-->
<!---->
<!--                    </div>-->
<!--                </div><!--/category-tab-->-->-->

                <div class="recommended_items"><!--recommended_items-->
                    <h2 class="title text-center">recommended items</h2>

                    <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <?php $count = count($hits); $i = 0; foreach ($hits as $hit):?>
                            <?php if($i % 3 == 0): ?>
                                <div class="item <?php if ($i == 0) echo 'active'?>">
                            <?php endif; ?>
                                <div class="col-sm-4">
                                    <div class="product-image-wrapper">
                                        <div class="single-products">
                                            <div class="productinfo text-center">
                                                <?= Html::img("@web/images/products/{$hit->img}", ['alt' => $hit->name])?>
                                                <h2><?= $hit->price?></h2>
                                                <p><a href="<?= \yii\helpers\Url::to(['product/view', 'id' => $hit->id])?>"><?= $hit->name?></a></p>
                                                <button type="button" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php $i++; if($i % 3 == 0 || $i == $count): ?>
                            </div>

                            <?php endif; ?>
                            <?php endforeach; ?>
                        </div>
                        <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
                            <i class="fa fa-angle-left"></i>
                        </a>
                        <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
                            <i class="fa fa-angle-right"></i>
                        </a>
                    </div>
                </div><!--/recommended_items-->

            </div>
        </div>
    </div>
</section>
