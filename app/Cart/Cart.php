<?php
namespace App\Cart;



class Cart{

    public $items = null;
    public $totalQty = 0;
    public $totalPrice = 0;
//    public $livraison = 0;
//    public $taxetva = 0;


    public function __construct($oldCart){

        if($oldCart){
            $this->items = $oldCart->items;
            $this->totalQty = $oldCart->totalQty;
            $this->totalPrice = $oldCart->totalPrice;
//            $this->livraison = $oldCart->livraison;
//            $this->taxetva = $oldCart->taxetva;
        }

    }

    public function add($item, $product_id){//tva

        $storedItem = ['qty' => 0, 'product_id' => 0, 'product_name' => $item->produits_name,
            'product_price' => $item->prix, 'product_image' => $item->image, 'item' =>$item];

        if($this->items){
            if(array_key_exists($product_id, $this->items)){
                $storedItem = $this->items[$product_id];
            }
        }

        $storedItem['qty']++;
        $storedItem['product_id'] = $product_id;
        $storedItem['product_name'] = $item->produits_name;
        $storedItem['product_price'] = $item->prix;
        $storedItem['product_image'] = $item->image;
        $this->totalQty++;
        $this->totalPrice += $item->prix;
        $this->items[$product_id] = $storedItem;

    }

    public function updateQty($id, $qty){
        $this->totalQty -= $this->items[$id]['qty'];
        $this->totalPrice -= $this->items[$id]['product_price'] * $this->items[$id]['qty'];
        $this->items[$id]['qty'] = $qty;
        $this->totalQty += $qty;
        $this->totalPrice += $this->items[$id]['product_price'] * $qty;

    }

    public function removeItem($id){
        $this->totalQty -= $this->items[$id]['qty'];
        $this->totalPrice -= $this->items[$id]['product_price'] * $this->items[$id]['qty'];
        unset($this->items[$id]);
    }


}
