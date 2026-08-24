# ポートフォリオサイト

PHP/SCSS/jQueryで作成したポートフォリオサイトです。
BEM・FLOCSSのcss設計を採用しています。

## 公開URL
https://with-kengo.com/

## 使用技術
- HTML5
- CSS3（Sassを使用）
- FLOCSS（ディレクトリ設計）
- BEM（命名規則）
- jQuery

## 設計方針
FLOCSSをベースに、変数・mixinなどプロジェクト全体で参照する設定を
`global` レイヤーとして独立させています。
Foundationは基本スタイルの出力に専念させ、責務を分離しました。
Objectレイヤーはさらに Component / Project / Utility に分割し、
BEM命名規則（Block__Element--Modifier）でクラス設計を行っています。

## ディレクトリ構成
\`\`\`
css/
├── global/ 
├── foundation/
├── layout/
└── object/
    ├── component/
    ├── project/
    └── utility/
\`\`\`
