# Learn Image Optimizer in PHP

ImgixやCloudinaryなど画像最適化サービスをPHPで作ってみる

## テスト用画像 (Assets)

本プロジェクトでは動作確認およびデモ用として、以下の画像を使用しています。

* **`images/cat01.jpg`**
    * Description: 茶色のぶち猫 (Brown tabby cat)
    * Credit: **Photo by Jae Park on Unsplash**
    * Source: [https://unsplash.com/photos/7GX5aICb5i4](https://unsplash.com/photos/7GX5aICb5i4)

## 動作確認

Dev Container 起動後、ホスト側は `8080` に固定公開されます。

- http://localhost:8080/index.php?file=cat01.jpg&w=200&h=200