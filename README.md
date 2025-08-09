# Guitar FX Community

## Data Model Sketch (reference)

- `users`

- `profiles` (user_id, username, avatar_path, bio, links json)

- `pedals` (brand, model, type, knob_schema json, slug)

- `user_pedal` (user_id, pedal_id, notes)

- `presets` (user_id, pedal_id, title, description, knob_values jsonb, image_path, is_public, slug)

- `favorites` (user_id, preset_id)

- `comments` (user_id, preset_id, parent_id, body)

- `preset_likes` (user_id, preset_id)


## Routing Plan (high‑level)

- Public

    - `/` — Latest presets, popular this week

    - `/pedals/{brand}/{model}` — Pedal details + presets

    - `/p/{presetSlug}` — Preset detail (SEO)

    - `/u/{username}` — User profile

    - `/search` — Results

- Auth

    - `/settings/profile` — Profile editor

    - `/me/favorites` — Saved presets
 

## Frontend Components (Vue Islands)

- `PresetCard.vue` — shows title, user, pedal, likes/favs

- `FavoriteToggle.vue` — optimistic heart

- `LikeButton.vue` — optimistic upvote

- `CommentThread.vue` — post/reply/delete

- `KnobForm.vue` — dynamic form from knob_schema

- `SearchBox.vue` — debounced search + results
