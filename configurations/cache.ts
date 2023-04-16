function limparCacheNavegador() {
  localStorage.clear();

  sessionStorage.clear();

  const cookies = document.cookie.split("; ");
  for (let i = 0; i < cookies.length; i++) {
    const cookie = cookies[i];
    const igualPos = cookie.indexOf("=");
    const nomeCookie = igualPos > -1 ? cookie.substring(0, igualPos) : cookie;
    document.cookie = nomeCookie + "=;expires=Thu, 01 Jan 1970 00:00:00 GMT";
  }
  return true;
}

limparCacheNavegador();
