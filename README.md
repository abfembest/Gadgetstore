# Gadgetstore - Gadget Store Management System

is a robust tech retail management system tailored specifically for electronic and gadget stores. It simplifies inventory control, repair tracking, customer billing, and store performance analytics.

---

## 🚀 Features

- 🧾 **Customer Billing** — Generate professional invoices and receipts for sales.
- 📦 **Stock Control** — Manage gadget inventory, stock levels, and reorders.
- 🔧 **Repair Tracking** — Track incoming repair requests, job status, and technician notes.
- 📊 **Analytics Dashboard** — View daily sales, stock reports, and customer trends.
- 👥 **User Roles** — Support for admins, sales agents, and technicians.
- 🔐 **Secure Login System** — Session-based authentication with access control.

---

## 🧰 Tech Stack

| Technology | Description             |
|------------|-------------------------|
| PHP        | Backend scripting       |
| MySQL      | Relational database     |
| HTML/CSS   | Structure and styling   |
| JavaScript | Frontend interactivity  |
| Bootstrap  | Responsive design       |

---

## 📂 Folder Structure
gadgetrix/
├── config/ # Configuration files
├── db/ # SQL dump and migrations
├── public/ # Public-facing files (CSS/JS)
├── src/ # Core PHP logic
├── views/ # HTML templates
├── uploads/ # Uploaded files & repair photos
└── index.php # Entry point

✅ Example Use Cases
A retail gadget shop managing walk-in customer sales
A repair center keeps logs of broken devices and repair status
A tech shop reviewing monthly gadget sales and profit trends

🔐 Security Notes
Sanitize all inputs and use prepared statements to prevent SQL injection.
Use session controls to limit access by role.
Store uploaded files securely and validate file types.
