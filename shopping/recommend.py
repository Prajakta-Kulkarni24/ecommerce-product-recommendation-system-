import pandas as pd

data = pd.read_csv("user_behavior.csv")

recommendations = []

products = data['product_id'].unique()

for pid in products:
    others = data[data['product_id'] != pid]
    sample = others.sample(min(4, len(others)))

    for _, row in sample.iterrows():
        recommendations.append([pid, row['product_id']])

df = pd.DataFrame(
    recommendations,
    columns=['base_product', 'recommended_product']
)

df.to_csv("product_recommendations.csv", index=False)

print("product_recommendations.csv generated")