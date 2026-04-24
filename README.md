---
title: Laravel
description: A Laravel app that connects to a PostgreSQL database
tags:
  - php
  - laravel
  - postgresql
---

# Laravel Starter Example

This is a [Laravel](https://laravel.com/) starter app that connects to a Railway Postgres database.

[![Deploy on Railway](https://railway.app/button.svg)](https://railway.app/new/template/fWEWWf)

## ✨ Features

- PHP
- Laravel
- Postgres


## データベース設計（簡易）
### テーブル一覧
- **users** : ユーザーマスタ
- **units** : ユニット
- **processes** : 工程マスタ
- **unit_processes** : 実施工程の構成内容と並び順
- **process_patterns** : 工程パターンのテンプレート
- **process_pattern_details** : 工程パターンの構成内容と並び順
- **holidays** : 祝日

### 主要なリレーション
- パターン定義関連： `process_patterns` --- `process_pattern_details` --- `processes`
- 実施工程関連： `units` (1) --- (多) `unit_processes`

  - ※パターン選択時は `process_pattern_details` から `unit_processes` へコピー。
  - ※未選択時は `unit_processes` を直接作成。