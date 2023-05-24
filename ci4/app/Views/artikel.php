public function artikel()
{
  $data = [
    'title' => 'Halaman Artikel',
    'content' => 'Ini adalah halaman artikel yang menjelaskan tentang isi halaman ini.'
  ];

  return view('artikel', $data);
}
