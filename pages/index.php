<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>달빛기행축제</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>

    <!-- 비주얼 영역 시작 -->
    <div class="slideBox"></div>
    <!-- 비주얼 영역 끝 -->

    <!-- 공지사항 영역 시작 -->
    <div class="news">
        <h1>공지사항</h1>
        <div>
            <input id="문화" type="radio" name="news" checked>
            <label for="문화">문화</label>
            <input id="교육" type="radio" name="news">
            <label for="교육">교육</label>
            <input id="체험" type="radio" name="news">
            <label for="체험">체험</label>

            <div id="문화Table" class="news_table">
                <table>
                    <tr>
                        <th>연번</th>
                        <th>제목</th>
                        <th>날짜</th>
                        <th>이미지</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>사랑만 남기는 문화들</td>
                        <td>2024년 5월 2일</td>
                        <td><img class="news_img" src="./img/공지사항_img.jpg" alt=""></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>문화체험, 모든 것을 놀이 하듯이</td>
                        <td>2024년 4월 19일</td>
                        <td><img class="news_img" src="./img/공지사항_img.jpg" alt=""></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>함께하면 더욱 즐거운 문화축제</td>
                        <td>2024년 3월 15일</td>
                        <td><img class="news_img" src="./img/공지사항_img.jpg" alt=""></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>달빛과 함께 하는 문화축제</td>
                        <td>2024년 2월 25일</td>
                        <td><img class="news_img" src="./img/공지사항_img.jpg" alt=""></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>다시 도약하는 전통, 함께 즐기는 문화</td>
                        <td>2024년 1월 2일</td>
                        <td><img class="news_img" src="./img/공지사항_img.jpg" alt=""></td>
                    </tr>
                </table>
            </div>

            <div id="교육Table" class="news_table">
                <table>
                    <tr>
                        <th>연번</th>
                        <th>제목</th>
                        <th>날짜</th>
                        <th>이미지</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>잊을 수 없는 역사, 그 날의 진실</td>
                        <td>2024년 4월 24일</td>
                        <td><img class="news_img" src="./img/공지사항_img.jpg" alt=""></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>재밌게 배우는 문화활동</td>
                        <td>2024년 4월 20일</td>
                        <td><img class="news_img" src="./img/공지사항_img.jpg" alt=""></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>더욱 생생하게, 현장체험실습</td>
                        <td>2024년 3월 21일</td>
                        <td><img class="news_img" src="./img/공지사항_img.jpg" alt=""></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>한국에는 이런 문화까지 있다</td>
                        <td>2024년 2월 29일</td>
                        <td><img class="news_img" src="./img/공지사항_img.jpg" alt=""></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>다시 시작하는 역사 돌아보기</td>
                        <td>2024년 1월 30일</td>
                        <td><img class="news_img" src="./img/공지사항_img.jpg" alt=""></td>
                    </tr>
                </table>
            </div>

            <div id="체험Table" class="news_table">
                <table>
                    <tr>
                        <th>연번</th>
                        <th>제목</th>
                        <th>날짜</th>
                        <th>이미지</th>
                    </tr>
                    <tr>
                        <td>1</td>
                        <td>이렇게 다양한 우리 문화들</td>
                        <td>2024년 4월 29일</td>
                        <td><img class="news_img" src="./img/공지사항_img.jpg" alt=""></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>역사 속의 물건들 체험하기</td>
                        <td>2024년 3월 25일</td>
                        <td><img class="news_img" src="./img/공지사항_img.jpg" alt=""></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>몯느게 새로워진 달빛기행 축제</td>
                        <td>2024년 3월 14일</td>
                        <td><img class="news_img" src="./img/공지사항_img.jpg" alt=""></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>100년전 그 날, 다시보는 과거</td>
                        <td>2024년 3월 10일</td>
                        <td><img class="news_img" src="./img/공지사항_img.jpg" alt=""></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>새로운 여행, 또 다른 시작</td>
                        <td>2024년 1월 31일</td>
                        <td><img class="news_img" src="./img/공지사항_img.jpg" alt=""></td>
                    </tr>
                </table>
            </div>


        </div>
    </div>
    <!-- 공지사항 영역 끝 -->

    <!-- 갤러리 영역 시작 -->
    <div class="gallery">
        <h1>갤러리</h1>
        <div class="scroll-container">
            <div id="gallery_img1" class="scroll-area">
                <h4>계림궁</h4>
            </div>
            <div id="gallery_img2" class="scroll-area">
                <h4>한옥마을</h4>
            </div>
            <div id="gallery_img3" class="scroll-area">
                <h4>첨성대</h4>
            </div>
        </div>
    </div>

    <!-- 갤러리 영역 끝 -->
    <script src="./공통제공파일/jquery/jquery.js"></script>
    <script src="./script.js"></script>
</body>

</html>