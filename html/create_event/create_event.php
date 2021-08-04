<?php
$teamName = "팀CSS";
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
  <!-- JavaScript Bundle with Popper -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <!-- Jquery -->
  <script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
  <!-- Date Picker -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js" integrity="sha512-T/tUfKSV1bihCnd+MxKD0Hm1uBBroVYBOYSk1knyvQ9VyZJpc/ALb4P0r6ubwVPSGB2GvjeoMAJJImBG12TiaQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css" integrity="sha512-mSYUmp1HYZDFaVKK//63EcZq4iFWFjxSL+Z3T/aCt4IO9Cejm03q3NKKYN6pFQzY0SBOr8h+eCIAZHPXcpZaNw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="styles/create_event.css" />
  <title>공공 이벤트 만들기</title>
</head>

<body>
  <div class="container create_event">
    <form action="/create_event/create.php" method="" name="aaa">
      <h1>새로운 일정 만들기</h1>
      <p>새로운 일정을 생성합니다.</p>
      <div class="form-group">
        <label for="selectedGroup">선택한 그룹</label>
        <input class="form-control" id="selectedGroup" aria-describedby="Group Select" placeholder="그룹 이름을 입력해주세요" disabled value="<?= $teamName ?>" />
        <input type="hidden" name="selectedGroup" value="<?= $teamName ?>" />
        <small id="selectedGroupHelp" class="form-text text-muted">팀 변경을 원하실 경우 홈페이지에서 팀을 선택한 후에 사용해주세요
        </small>
      </div>
      <hr />
      <div class="form-group">
        <label for="eventName">제목</label>
        <input type="text" class="form-control" id="eventName" name="eventName" placeholder="일정 제목을 입력해주세요" />
      </div>
      <div class="form-group">
        <div class="row">
          <div class="col">
            <label for="eventDate">날짜</label>
            <div id="datepicker"></div>
            <input type="hidden" name="datepicker" id="my_hidden_input" />
          </div>
          <div class="col">
            <div class="row">
              <div class="form-group">
                <label for="eventDuration">지속시간</label>
                <div class="row">
                  <div class="col">
                    <input name="eventDuration" type="text" class="form-control" id="eventDuration" placeholder="시간" />
                  </div>
                  <div class="col">
                    <input name="eventDurationMin" type="text" class="form-control" id="eventDurationMin" placeholder="분" />
                  </div>
                </div>
              </div>
              <div class="row">
                <div class="col">
                  <div class="form-group">
                    <label for="eventDuration">최소시간</label>
                    <select name="mintime" id="mintime" class="form-select timeclock mintime"></select>
                  </div>
                </div>
                <div class="col">
                  <div class="form-group">
                    <label for="eventDuration">최대시간</label>
                    <select name="eventDuration" class="form-select timeclock maxtime"></select>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- <input
            type="text"
            class="form-control"
            id="eventDate"
            placeholder="일정 제목을 입력해주세요"
          /> -->
      </div>

      <div id="inviteusers">
        <h2>초대할 사용자</h2>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="i-u-jungsub" />
          <label class="form-check-label" for="i-u-jungsub"> 유정섭 </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="i-u-hylim" />
          <label class="form-check-label" for="i-u-hylim"> 최혜림 </label>
        </div>
        <div class="form-check">
          <input class="form-check-input" type="checkbox" value="" id="i-u-seokmin" />
          <label class="form-check-label" for="i-u-seokmin"> 정석민 </label>
        </div>
      </div>

      <div id="submitbutton">
        <button type="submit" class="btn btn-primary">일정 만들기</button>
      </div>
    </form>
  </div>

  <!-- WarningModal -->
  <!-- Modal -->
  <div class="modal fade" id="wrongdatewarning" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">잘못된 시간 설정</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          시간 설정이 잘못 되었습니다. <br />
          최소 시간이 최대 시간 전에 있을 수 없습니다.
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">
            Close
          </button>
        </div>
      </div>
    </div>
  </div>

  <script>
    $(document).ready(() => {
      $("#datepicker").datepicker({
        todayHighlight: true,
        startDate: new Date(),
        multidate: true,
        multidateSeparator: ", ",
      });
      $("#datepicker").on("changeDate", function() {
        $("#my_hidden_input").val(
          $("#datepicker").datepicker("getFormattedDate")
        );
      });

      // Min Time
      $(".timeclock.mintime").each((_, elem) => {
        for (let i = 0; i < 1440; i += 10) {
          $(elem).append(
            `<option value="${i}">${String(Math.floor(i / 60)).padStart(
                2,
                "0"
              )}:${String(Math.floor(i % 60)).padStart(2, "0")}</option>`
          );
        }
      });

      // Max Time
      $(".timeclock.maxtime").each((_, elem) => {
        for (let i = 10; i < 1440; i += 10) {
          $(elem).append(
            `<option value="${i}">${String(Math.floor(i / 60)).padStart(
                2,
                "0"
              )}:${String(Math.floor(i % 60)).padStart(2, "0")}</option>`
          );
        }
        $(elem).append("<option value='1440' selected>24:00</option>");
      });

      $(".timeclock").each((_, elem) => {
        // Add event handler
        $(elem).on("change", (e) => {
          const maxtime = parseInt($(".maxtime")[0].value);
          const mintime = parseInt($(".mintime")[0].value);
          console.table({
            mintime,
            maxtime
          });
          if (maxtime < mintime) {
            $("#wrongdatewarning").modal("show");
            // alert("시간 설정이 잘못 되었습니다.");
            $(".maxtime")[0].value = 1440;
          }
        });
      });

      // $(".timeclock.mintime").on("change", (e, args) => {
      //   console.log(e.target.value);
      // });
    });
  </script>
</body>

</html>