INSERT INTO `official_roles` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Super Admin', 'Super Admin has all access to do.', '2023-08-06 15:50:06', '2023-08-06 15:50:06');

INSERT INTO `officials` (`id`, `name`, `image`, `role_id`, `gender`, `personal_phone`, `working_phone`, `emergency_phone`, `emergency_relationship`, `present_address`, `permanent_address`, `nationality_certificate`, `nationality_number`, `salary`, `manager`, `date_of_birth`, `personal_email`, `working_email`, `status`, `department`, `approved_by`, `joining_date`, `created_at`, `updated_at`, `deleted_at`, `ip_address`, `created_by`, `updated_by`, `deleted_by`) VALUES
(0, 'Dev Admin', NULL, 1, 'Other', '01840208832', NULL, '01633394589', 'Someone Special', 'Road 6, Sector 9, Uttara, Dhaka-1230', '1', 'Birth Certificate', '45616516584', 150000, NULL, '1997-06-05', 'salmajahansahara@gmail.com', 'dev@tjr.com', NULL, 'Manager', 1, '2023-08-04', '2023-08-06 15:51:16', '2023-08-06 15:51:16', NULL, NULL, 1, 1, NULL),
(1, 'Admin', NULL, 1, 'Other', '01633394589', NULL, '01678054659', 'Mother', '118/6 North Kafrul, Kafrul, Dhaka-1206', 'Kushtia', 'NID', '6463772118', 50000, NULL, '1999-05-04', 'tahmidmahbub168@gmail.com', 'admin@tjr.com', NULL, 'Manager', 1, '2023-08-04', '2023-08-06 15:45:54', '2023-08-06 15:45:54', NULL, NULL, 1, 1, NULL);

INSERT INTO `login_credentials` (`id`, `role`, `user_id`, `email`, `phone`, `username`, `password`, `verified`, `status`, `created_at`, `updated_at`) VALUES
(0, 'official', 0, 'dev@tjr.com', '01840208832', 'sahara', '12345678', 'yes', 'active', '2023-08-06 16:09:56', '2023-08-06 16:09:56'),
(1, 'official', 1, 'admin@tjr.com', '01633394859', 'admin', '12345678', 'yes', 'active', '2023-08-06 16:09:56', '2023-08-06 16:09:56');

INSERT INTO `categories` (`id`, `name`, `description`, `image`, `approved_by`, `created_at`, `updated_at`, `created_by`, `updated_by`, `deleted_at`, `deleted_by`) VALUES
(1, 'Grocery', 'Day to day life needed grocery items.', NULL, 1, '2023-08-06 15:45:54', '2023-08-06 15:45:54', 1, 1, NULL, NULL),
(2, 'Fashion & Clothing', 'Find the latest fashion trends and stylish clothing items.', NULL, 1, '2023-08-06 15:45:54', '2023-08-06 15:45:54', 1, 1, NULL, NULL);

INSERT INTO `subcategories` (`id`, `name`, `description`, `image`, `category_id`, `approved_by`, `created_at`, `updated_at`, `created_by`, `updated_by`, `deleted_at`, `deleted_by`) VALUES
(1, 'Vegetables', 'Vegetables Subcategory Under Grocery Category', NULL, 1, 1, '2023-08-06 16:17:56', '2023-08-06 16:17:56', 1, 1, NULL, NULL),
(2, 'Men\'s Collection', 'Men\'s Collection Subcategory Under Fashion & Clothing Category', NULL, 2, 1, '2023-08-06 16:17:56', '2023-08-06 16:17:56', 1, 1, NULL, NULL),
(3, 'Women\'s Outfit', 'Women\'s Outfit Subcategory Under Fashion & Clothing Category', NULL, 2, 1, '2023-08-06 16:21:17', '2023-08-06 16:21:17', 1, 1, NULL, NULL),
(4, 'Snacks', 'Snacks Subcategory Under Grocery Category', NULL, 1, 1, '2023-08-06 16:21:17', '2023-08-06 16:21:17', 1, 1, NULL, NULL);
