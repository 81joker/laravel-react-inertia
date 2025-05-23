import { useEffect, useState } from "react";

export default function FlashMessage({ message, type = "success", duration = 3000 }) {
  const [visible, setVisible] = useState(!!message);

  useEffect(() => {
    if (message) {
      const timer = setTimeout(() => setVisible(false), duration);
      return () => clearTimeout(timer);
    }
  }, [message]);

  if (!visible) return null;

  const bgClass = {
    success: "bg-emerald-500",
    error: "bg-red-500",
    warning: "bg-yellow-500",
  }[type];

  return (
    <div className={`${bgClass} py-2 px-4 text-white rounded mb-4`}>
      {message}
    </div>
  );
}
