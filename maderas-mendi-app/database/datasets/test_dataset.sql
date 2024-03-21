-- Insert root categories
INSERT INTO categories (name, description, category_id, created_at, updated_at)
VALUES
    ('Category 1', 'Description for Category 1', NULL, NOW(), NOW()),
    ('Category 2', 'Description for Category 2', NULL, NOW(), NOW()),
    ('Category 3', 'Description for Category 3', NULL, NOW(), NOW()),
    ('Category 4', 'Description for Category 4', NULL, NOW(), NOW()),
    ('Category 5', 'Description for Category 5', NULL, NOW(), NOW()),
    ('Category 6', 'Description for Category 6', NULL, NOW(), NOW()),
    ('Category 7', 'Description for Category 7', NULL, NOW(), NOW()),
    ('Category 8', 'Description for Category 8', NULL, NOW(), NOW()),
    ('Category 9', 'Description for Category 9', NULL, NOW(), NOW()),
    ('Category 10', 'Description for Category 10', NULL, NOW(), NOW());

-- Insert subcategories
INSERT INTO categories (name, description, category_id, created_at, updated_at)
SELECT CONCAT('Subcategory ', ROW_NUMBER() OVER (ORDER BY r.id ASC), ' under Category ', r.id),
       CONCAT('Description for Subcategory ', ROW_NUMBER() OVER (ORDER BY r.id ASC), ' under Category ', r.id),
       r.id,
       NOW(),
       NOW()
FROM categories r
ORDER BY RAND() -- Randomize the selection of root categories
LIMIT 5; -- Number of subcategories in total



-- Insert products
INSERT INTO products (name, description, is_feature_product, file_url, category_id, created_at, updated_at)
SELECT CONCAT('Product ', p.id),
       CONCAT('Description for Product ', p.id),
       p.id % 2, -- Example logic for is_feature_product
       IF(p.id % 3 = 0, CONCAT('file_url_for_product_', p.id, '.jpg'), NULL), -- Example logic for file_url
       c.id,
       NOW(),
       NOW()
FROM (
    SELECT ROW_NUMBER() OVER() AS id
    FROM information_schema.columns
    LIMIT 50 -- Number of products
) p
JOIN categories c ON p.id % 10 + 1 = c.id; -- Adjust to distribute products across categories

-- Insert product images (maximum 3 images per product)
INSERT INTO product_images (url, product_id, created_at, updated_at)
SELECT CONCAT('product_image_url_', p.id, '_', i.id, '.jpg'),
       p.id,
       NOW(),
       NOW()
FROM (
    SELECT ROW_NUMBER() OVER() AS id
    FROM information_schema.columns
    LIMIT 50 -- Number of products
) p
CROSS JOIN (
    SELECT 1 AS id UNION ALL
    SELECT 2 AS id UNION ALL
    SELECT 3 AS id
) i;

-- Insert category images (maximum 3 images per category)
INSERT INTO category_images (url, category_id, created_at, updated_at)
SELECT CONCAT('category_image_url_', c.id, '_', i.id, '.jpg'),
       c.id,
       NOW(),
       NOW()
FROM (
    SELECT ROW_NUMBER() OVER() AS id
    FROM information_schema.columns
    LIMIT 10 -- Number of categories
) c
CROSS JOIN (
    SELECT 1 AS id UNION ALL
    SELECT 2 AS id UNION ALL
    SELECT 3 AS id
) i;

INSERT INTO blog_entries (title, subtitle, text, created_at, updated_at)
VALUES
    ('Introduction to SQL', 'Understanding the basics', 'SQL (Structured Query Language) is a powerful tool...', NOW(), NOW()),
    ('Mastering Python', 'Tips and tricks for Python developers', 'Python is a versatile programming language...', NOW(), NOW()),
    ('The Art of Data Visualization', 'Unlocking insights through visuals', 'Data visualization is an essential skill for data scientists...', NOW(), NOW()),
    ('Building Modern Web Applications', 'Exploring the latest web technologies', 'Web development has evolved significantly over the years...', NOW(), NOW()),
    ('Machine Learning Fundamentals', 'Getting started with ML', 'Machine learning is revolutionizing industries...', NOW(), NOW()),
    ('The Power of APIs', 'Building scalable applications with APIs', 'Application Programming Interfaces (APIs) play a crucial role in modern software development...', NOW(), NOW()),
    ('Cybersecurity Best Practices', 'Protecting your digital assets', 'Cybersecurity is a growing concern in today''s digital landscape...', NOW(), NOW()),
    ('Exploring Cloud Computing', 'Understanding cloud technologies', 'Cloud computing offers numerous benefits for businesses...', NOW(), NOW()),
    ('The Future of Artificial Intelligence', 'Examining AI trends', 'Artificial Intelligence (AI) is reshaping the future of technology...', NOW(), NOW()),
    ('Navigating the Blockchain Revolution', 'Understanding blockchain technology', 'Blockchain technology has the potential to disrupt various industries...', NOW(), NOW());


-- Insert image URLs for all blog entries
INSERT INTO blog_images (url, blog_entry_id, created_at, updated_at)
SELECT 'https://via.placeholder.com/500x300', blog_entries.id, NOW(), NOW()
FROM blog_entries
CROSS JOIN (
    SELECT 1 AS n UNION ALL SELECT 2 UNION ALL SELECT 3
) AS images
ORDER BY blog_entries.id;


INSERT INTO users(username, password) VALUES ('admin','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4');


CREATE VIEW parent_categories AS
SELECT c.id, c.name, c.description
FROM categories c
LEFT JOIN categories parent ON c.category_id = parent.id
WHERE parent.id IS NULL;


CREATE VIEW feature_products AS
SELECT *
FROM products
WHERE is_feature_product = 1;


