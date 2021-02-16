<?php
namespace App\Classes;

Class PagingFunction
{
	var $pageSize = 10;
	var $blockSize = 5;
	
	public function __construct($option = false) {
		if($option != null) {
			$this->pageSize = !empty($option['pageSize'])?$option['pageSize']:$this->pageSize;
			$this->blockSize = !empty($option['blockSize'])?$option['blockSize']:$this->blockSize;
		}
	}

		//총 레코드 수, 현재 페이지, 사용할 스크립트 명, 블럭이동 사용여부, 이동 버튼 표시유무, 뒤로가기버튼 html, 다음으로버튼 html, 처음으로버튼 html, 마지막으로버튼 html
		function paging($totalCount, $thisPage, $link, $block = false, $showFast = false, $prevBtn = false, $nextBtn = false, $firstBtn = false, $endBtn = false) {
		
			//총 페이지 수, 총 블럭 수, 시작페이지, 종료페이지, 현재블럭;
			$totalPage; $totalBlock; $startPage; $endPage; $thisBlock;
			
			//총 페이지 개수를 꺼내옴. 전체에서 페이지당 표시할 개수를 나누어 구함.
			if (($totalCount % $this->pageSize) > 0) {
				$totalPage = floor($totalCount / $this->pageSize) + 1;
			} else {
				$totalPage = floor($totalCount / $this->pageSize);
			}
			
			if($totalPage > 1) {
	
				//뒤로가기 버튼
				if($thisPage == 1) {
					if($showFast != false) {
						if($prevBtn == "") {
							$prevBtn = '<a class="page-link" href="#">Prev</a>';
						}
					} else {
						$prevBtn = '';
					}
					
				} else {
					if($prevBtn == "") {
						$prevBtn = '<li class="page-item" onclick="javascript:' . $link . '(' . ($thisPage - 1) . ')"><a class="page-link" href="#">Prev</a></li>';
					} else {
						$prevBtn = '<li class="page-item" onclick="javascript:' . $link . '(' . ($thisPage - 1) . ')">' . $prevBtn . '</li>';
					}
				}
				
				//처음으로 가기 버튼
				if($thisPage == 1) {
					if($showFast != false) {
						if($firstBtn == "") {
							$firstBtn = '<a class="page-link" href="#">First</a>';
						}
					} else {
						$firstBtn = "";
					}
				} else {
					if($firstBtn == "") {
						$firstBtn = '<li class="page-item" onclick="javascript:' . $link . '(1)"><a class="page-link" href="#">First</a></li>';
					} else {
						$firstBtn = '<li class="page-item" onclick="javascript:' . $link . '(1)">' . $firstBtn . '</li>';
					}
					
				}
				
				//다음으로 버튼
				if($thisPage >= $totalPage) {
					if($showFast != false) {
						if($nextBtn == "") {
							$nextBtn = '<a class="page-link" href="#">Next</a>';
						}
					} else {
						$nextBtn = '';
					}
				} else {
					if($nextBtn == "") {
						$nextBtn = '<li class="page-item" onclick="javascript:' . $link . '(' . ($thisPage + 1) . ')"><a class="page-link" href="#">Next</a></li>';
					} else {
						$nextBtn = '<li class="page-item" onclick="javascript:' . $link . '(' . ($thisPage + 1) . ')">' . $nextBtn . '</li>';
					}
				}
				
				//마지막으로 가기 버튼
				if($thisPage >= $totalPage) {
					if($showFast != false) {
						if($endBtn == "") {
							$endBtn = '<a class="page-link" href="#">Last</a>';
						}
					} else {
						$endBtn = '';
					}			
				} else {
					if($endBtn == "") {
						$endBtn = '<li class="page-item" onclick="javascript:' . $link . '(' . $totalPage . ')"><a class="page-link" href="#">Last</a></li>';
					} else {
						$endBtn = '<li class="page-item" onclick="javascript:' . $link . '(' . $totalPage . ')">' . $endBtn . '</li>';
					}
				}
				//페이지 번호
				$paging = ""; $i; $start_view; $end_view;
				//현재 페이지 기준으로 블럭 사이즈만큼만 표시. 현재 페이지가 한 블럭에 표시될 페이지보다 크면 가장 오른쪽에 위치.
				if($block == false) {
					if(($thisPage + 1 - $this->blockSize) >= 1) {
							$start_view = $thisPage + 1 - $this->blockSize;
					} else {
						$start_view = 1;
					}
	
					if($totalPage > $this->blockSize) {
						if($thisPage >= $totalPage) {
							$end_view = $start_view + $this->blockSize - 1;
						} else {
							$end_view = $start_view - 1 + $this->blockSize;
						}
					} else {
						$end_view = $totalPage;
					}
	
					for($i = $start_view; $i <= $end_view; $i++) {
						if($i == $thisPage) {
							$paging .= '<li class="page-item"><a class="page-link on" href="#">' . $i . '</a></li>';
						} else {
							$paging .= '<li class="page-item" onclick="javascript:' . $link . '(' . $i . ')"><a class="page-link" href="#">' . $i . '</a></li>';
						}
					}
				} 
				//페이지가 블럭을 넘어갈 때 블럭 범위도 이동.
				else {
					//총 블럭 수 구하기.
					if ($totalCount == 0) {
						$totalBlock = 1;			
					} else {
						$totalBlock = ceil($totalPage / $this->blockSize);
					}
					
					//현재 블럭값 구하기
					$thisBlock = ceil($thisPage / $this->blockSize);
					
					//시작 페이지 및 종료 페이지 구하기.
					//현재 블럭의 시작 번호를 구함.
					$blockStartView = ($thisBlock - 1) * $this->blockSize + 1;
					//현재 블럭의 끝 페이지를 구함.
					$blockEndView = $blockStartView + $this->blockSize - 1;
					
					//마지막 페이지가 총 페이지보다 클 경우 마지막 페이지는 전체 페이지와 같음.
					if ($blockEndView > $totalPage) {
						$blockEndView = $totalPage;			
					}
					
					//페이지 번호 표시
					$i; $endloop;
					$endloop = $this->blockSize + $blockStartView - 1;
					
					//현재 시작 블럭부터 블럭에 표시할 페이지 수만큼 page를 루프를 돌림 마지막 블럭일 경우에는 수가 모자를 수도 있기 때문에 end page만큼 돌린다.
					if (($endloop > $totalCount) || ($endloop > $blockEndView)) {
						$endloop = $blockEndView;			
					}
					
					for($i = $blockStartView; $i <= $endloop; $i++) {
						if($thisPage == $i) {
							$paging .= '<li class="page-item"><a class="page-link on" href="#">' . $i . '</a></li>';
						} else {
							$paging .= '<li class="page-item" onclick="javascript:' . $link . '(' . $i . ')"><a class="page-link" href="#">' . $i . '</a></li>';
						}
					}
					
					$prevNum = ($thisPage - $this->blockSize > 1) ? $thisPage - $this->blockSize : 1 ;
					$nextNum = ($thisPage + $this->blockSize >= $totalPage) ? $totalPage : $thisPage + $this->blockSize ;
					
					if($thisBlock > 1) {
						if($prevBtn == "") {
							$prevBtn = '<a class="page-link" href="#">Prev</a>';
						}
					} else {
						if($prevBtn == "") {
							$prevBtn = '<li class="page-item" onclick="javascript:' . $link . '(' . $prevNum . ')"><a class="page-link" href="#">Prev</a></li>';
						} else {
							$prevBtn = '<li class="page-item" onclick="javascript:' . $link . '(' . $prevNum . ')">' . $prevBtn . '</li>';
						}
					}
					
					if($thisBlock == $totalBlock) {
						if($nextBtn == "") {
							$nextBtn = '<a class="page-link" href="#">Next</a>';
						}
					} else {
						if($nextBtn == "") {
							$nextBtn = '<li class="page-item" onclick="javascript:' . $link . '(' . $nextNum . ')"><a class="page-link" href="#">Next</a></li>';
						} else {
							$nextBtn = '<li class="page-item" onclick="javascript:' . $link . '(' . $nextNum . ')">' . $nextBtn . '</li>';
						}
					}
					
				}
				
				if($showFast == false) {
					$paging_view = $firstBtn . $prevBtn . $paging . $nextBtn . $endBtn;
				} else {
					$paging_view = $firstBtn . $prevBtn . $paging . $nextBtn . $endBtn;
				}
				
				return $paging_view;
			
			} else {
				return "";
			}
		}

	//총 레코드 수, 현재 페이지, 사용할 스크립트 명, 블럭이동 사용여부, 이동 버튼 표시유무, 뒤로가기버튼 html, 다음으로버튼 html, 처음으로버튼 html, 마지막으로버튼 html
	function fr_paging($totalCount, $thisPage, $link, $block = false, $showFast = false, $prevBtn = false, $nextBtn = false, $firstBtn = false, $endBtn = false) {
		
		//총 페이지 수, 총 블럭 수, 시작페이지, 종료페이지, 현재블럭;
		$totalPage; $totalBlock; $startPage; $endPage; $thisBlock;
		
		//총 페이지 개수를 꺼내옴. 전체에서 페이지당 표시할 개수를 나누어 구함.
		if (($totalCount % $this->pageSize) > 0) {
			$totalPage = floor($totalCount / $this->pageSize) + 1;
		} else {
			$totalPage = floor($totalCount / $this->pageSize);
		}
		
		if($totalPage > 1) {

			//뒤로가기 버튼
			if($thisPage == 1) {
				if($showFast != false) {
					if($prevBtn == "") {
						$prevBtn = '<a class="page-link" href="#"><img src="/img/prev_ic.png" alt="" class="img_m"></a>';
					}
				} else {
					$prevBtn = '';
				}
				
			} else {
				if($prevBtn == "") {
					$prevBtn = '<li class="page-item" onclick="javascript:' . $link . '(' . ($thisPage - 1) . ')"><a class="page-link" href="#"><img src="/img/prev_ic.png" alt="" class="img_m"></a></li>';
				} else {
					$prevBtn = '<li class="page-item" onclick="javascript:' . $link . '(' . ($thisPage - 1) . ')">' . $prevBtn . '</li>';
				}
			}
			
			//처음으로 가기 버튼
			if($thisPage == 1) {
				if($showFast != false) {
					if($firstBtn == "") {
						$firstBtn = '<a class="page-link" href="#"><img src="/img/prev_add.png" alt=""></a>';
					}
				} else {
					$firstBtn = "";
				}
			} else {
				if($firstBtn == "") {
					$firstBtn = '<li class="page-item" onclick="javascript:' . $link . '(1)"><a class="page-link" href="#"><img src="/img/prev_add.png" alt=""></a></li>';
				} else {
					$firstBtn = '<li class="page-item" onclick="javascript:' . $link . '(1)">' . $firstBtn . '</li>';
				}
				
			}
			
			//다음으로 버튼
			if($thisPage >= $totalPage) {
				if($showFast != false) {
					if($nextBtn == "") {
						$nextBtn = '<a class="page-link" href="#"><img src="/img/next_ic.png" alt="" class="img_m2"></a>';
					}
				} else {
					$nextBtn = '';
				}
			} else {
				if($nextBtn == "") {
					$nextBtn = '<li class="page-item" onclick="javascript:' . $link . '(' . ($thisPage + 1) . ')"><a class="page-link" href="#"><img src="/img/next_ic.png" alt="" class="img_m2"></a></li>';
				} else {
					$nextBtn = '<li class="page-item" onclick="javascript:' . $link . '(' . ($thisPage + 1) . ')">' . $nextBtn . '</li>';
				}
			}
			
			//마지막으로 가기 버튼
			if($thisPage >= $totalPage) {
				if($showFast != false) {
					if($endBtn == "") {
						$endBtn = '<a class="page-link" href="#"><img src="/img/next_add.png" alt=""></a>';
					}
				} else {
					$endBtn = '';
				}			
			} else {
				if($endBtn == "") {
					$endBtn = '<li class="page-item" onclick="javascript:' . $link . '(' . $totalPage . ')"><a class="page-link" href="#"><img src="/img/next_add.png" alt=""></a></li>';
				} else {
					$endBtn = '<li class="page-item" onclick="javascript:' . $link . '(' . $totalPage . ')">' . $endBtn . '</li>';
				}
			}
			//페이지 번호
			$paging = ""; $i; $start_view; $end_view;
			//현재 페이지 기준으로 블럭 사이즈만큼만 표시. 현재 페이지가 한 블럭에 표시될 페이지보다 크면 가장 오른쪽에 위치.
			if($block == false) {
				if(($thisPage + 1 - $this->blockSize) >= 1) {
						$start_view = $thisPage + 1 - $this->blockSize;
				} else {
					$start_view = 1;
				}

				if($totalPage > $this->blockSize) {
					if($thisPage >= $totalPage) {
						$end_view = $start_view + $this->blockSize - 1;
					} else {
						$end_view = $start_view - 1 + $this->blockSize;
					}
				} else {
					$end_view = $totalPage;
				}

				for($i = $start_view; $i <= $end_view; $i++) {
					if($i == $thisPage) {
						$paging .= '<li class="page-item on"><a class="page-link" href="#">' . $i . '</a></li>';
					} else {
						$paging .= '<li class="page-item" onclick="javascript:' . $link . '(' . $i . ')"><a class="page-link" href="#">' . $i . '</a></li>';
					}
				}
			} 
			//페이지가 블럭을 넘어갈 때 블럭 범위도 이동.
			else {
				//총 블럭 수 구하기.
				if ($totalCount == 0) {
					$totalBlock = 1;			
				} else {
					$totalBlock = ceil($totalPage / $this->blockSize);
				}
				
				//현재 블럭값 구하기
				$thisBlock = ceil($thisPage / $this->blockSize);
				
				//시작 페이지 및 종료 페이지 구하기.
				//현재 블럭의 시작 번호를 구함.
				$blockStartView = ($thisBlock - 1) * $this->blockSize + 1;
				//현재 블럭의 끝 페이지를 구함.
				$blockEndView = $blockStartView + $this->blockSize - 1;
				
				//마지막 페이지가 총 페이지보다 클 경우 마지막 페이지는 전체 페이지와 같음.
				if ($blockEndView > $totalPage) {
					$blockEndView = $totalPage;			
				}
				
				//페이지 번호 표시
				$i; $endloop;
				$endloop = $this->blockSize + $blockStartView - 1;
				
				//현재 시작 블럭부터 블럭에 표시할 페이지 수만큼 page를 루프를 돌림 마지막 블럭일 경우에는 수가 모자를 수도 있기 때문에 end page만큼 돌린다.
				if (($endloop > $totalCount) || ($endloop > $blockEndView)) {
					$endloop = $blockEndView;			
				}
				
				for($i = $blockStartView; $i <= $endloop; $i++) {
					if($thisPage == $i) {
						$paging .= '<li class="page-item on"><a class="page-link" href="#">' . $i . '</a></li>';
					} else {
						$paging .= '<li class="page-item" onclick="javascript:' . $link . '(' . $i . ')"><a class="page-link" href="#">' . $i . '</a></li>';
					}
				}
				
				$prevNum = ($thisPage - $this->blockSize > 1) ? $thisPage - $this->blockSize : 1 ;
				$nextNum = ($thisPage + $this->blockSize >= $totalPage) ? $totalPage : $thisPage + $this->blockSize ;
				
				if($thisBlock > 1) {
					if($prevBtn == "") {
						$prevBtn = '<a class="page-link" href="#"><img src="/img/prev_ic.png" alt="" class="img_m"></a>';
					}
				} else {
					if($prevBtn == "") {
						$prevBtn = '<li class="page-item" onclick="javascript:' . $link . '(' . $prevNum . ')"><a class="page-link" href="#"><img src="/img/prev_ic.png" alt="" class="img_m"></a></li>';
					} else {
						$prevBtn = '<li class="page-item" onclick="javascript:' . $link . '(' . $prevNum . ')">' . $prevBtn . '</li>';
					}
				}
				
				if($thisBlock == $totalBlock) {
					if($nextBtn == "") {
						$nextBtn = '<a class="page-link" href="#"><img src="/img/next_ic.png" alt="" class="img_m2"></a>';
					}
				} else {
					if($nextBtn == "") {
						$nextBtn = '<li class="page-item" onclick="javascript:' . $link . '(' . $nextNum . ')"><a class="page-link" href="#"><img src="/img/next_ic.png" alt="" class="img_m2"></a></li>';
					} else {
						$nextBtn = '<li class="page-item" onclick="javascript:' . $link . '(' . $nextNum . ')">' . $nextBtn . '</li>';
					}
				}
				
			}
			
			if($showFast == false) {
				$paging_view = $firstBtn . $prevBtn .'<ul>'. $paging .'</ul>'. $nextBtn . $endBtn;
			} else {
				$paging_view = $firstBtn . $prevBtn .'<ul>'. $paging .'</ul>'. $nextBtn . $endBtn;
			}
			
			return $paging_view;
		
		} else {
			return "";
		}
	}

		//총 레코드 수, 현재 페이지, 사용할 스크립트 명, 블럭이동 사용여부, 이동 버튼 표시유무, 뒤로가기버튼 html, 다음으로버튼 html, 처음으로버튼 html, 마지막으로버튼 html
		function fr_paging2($totalCount, $thisPage, $link, $block = false, $showFast = false, $prevBtn = false, $nextBtn = false, $firstBtn = false, $endBtn = false) {
		
			//총 페이지 수, 총 블럭 수, 시작페이지, 종료페이지, 현재블럭;
			$totalPage; $totalBlock; $startPage; $endPage; $thisBlock;
			
			//총 페이지 개수를 꺼내옴. 전체에서 페이지당 표시할 개수를 나누어 구함.
			if (($totalCount % $this->pageSize) > 0) {
				$totalPage = floor($totalCount / $this->pageSize) + 1;
			} else {
				$totalPage = floor($totalCount / $this->pageSize);
			}
			
			if($totalPage > 1) {
	
				//뒤로가기 버튼
				if($thisPage == 1) {
					if($showFast != false) {
						if($prevBtn == "") {
							$prevBtn = '<a class="page-link" href="#"><img src="/img/prev_ic_n.png" alt="" class="img_m"></a>';
						}
					} else {
						$prevBtn = '';
					}
					
				} else {
					if($prevBtn == "") {
						$prevBtn = '<li class="page-item" onclick="javascript:' . $link . '(' . ($thisPage - 1) . ')"><a class="page-link" href="#"><img src="/img/prev_ic_n.png" alt="" class="img_m"></a></li>';
					} else {
						$prevBtn = '<li class="page-item" onclick="javascript:' . $link . '(' . ($thisPage - 1) . ')">' . $prevBtn . '</li>';
					}
				}
				
				//처음으로 가기 버튼
				if($thisPage == 1) {
					if($showFast != false) {
						if($firstBtn == "") {
							$firstBtn = '<a class="page-link" href="#"><img src="/img/prev_add_n.png" alt=""></a>';
						}
					} else {
						$firstBtn = "";
					}
				} else {
					if($firstBtn == "") {
						$firstBtn = '<li class="page-item" onclick="javascript:' . $link . '(1)"><a class="page-link" href="#"><img src="/img/prev_add_n.png" alt=""></a></li>';
					} else {
						$firstBtn = '<li class="page-item" onclick="javascript:' . $link . '(1)">' . $firstBtn . '</li>';
					}
					
				}
				
				//다음으로 버튼
				if($thisPage >= $totalPage) {
					if($showFast != false) {
						if($nextBtn == "") {
							$nextBtn = '<a class="page-link" href="#"><img src="/img/next_ic_n.png" alt="" class="img_m2"></a>';
						}
					} else {
						$nextBtn = '';
					}
				} else {
					if($nextBtn == "") {
						$nextBtn = '<li class="page-item" onclick="javascript:' . $link . '(' . ($thisPage + 1) . ')"><a class="page-link" href="#"><img src="/img/next_ic_n.png" alt="" class="img_m2"></a></li>';
					} else {
						$nextBtn = '<li class="page-item" onclick="javascript:' . $link . '(' . ($thisPage + 1) . ')">' . $nextBtn . '</li>';
					}
				}
				
				//마지막으로 가기 버튼
				if($thisPage >= $totalPage) {
					if($showFast != false) {
						if($endBtn == "") {
							$endBtn = '<a class="page-link" href="#"><img src="/img/next_add_n.png" alt=""></a>';
						}
					} else {
						$endBtn = '';
					}			
				} else {
					if($endBtn == "") {
						$endBtn = '<li class="page-item" onclick="javascript:' . $link . '(' . $totalPage . ')"><a class="page-link" href="#"><img src="/img/next_add_n.png" alt=""></a></li>';
					} else {
						$endBtn = '<li class="page-item" onclick="javascript:' . $link . '(' . $totalPage . ')">' . $endBtn . '</li>';
					}
				}
				//페이지 번호
				$paging = ""; $i; $start_view; $end_view;
				//현재 페이지 기준으로 블럭 사이즈만큼만 표시. 현재 페이지가 한 블럭에 표시될 페이지보다 크면 가장 오른쪽에 위치.
				if($block == false) {
					if(($thisPage + 1 - $this->blockSize) >= 1) {
							$start_view = $thisPage + 1 - $this->blockSize;
					} else {
						$start_view = 1;
					}
	
					if($totalPage > $this->blockSize) {
						if($thisPage >= $totalPage) {
							$end_view = $start_view + $this->blockSize - 1;
						} else {
							$end_view = $start_view - 1 + $this->blockSize;
						}
					} else {
						$end_view = $totalPage;
					}
	
					for($i = $start_view; $i <= $end_view; $i++) {
						if($i == $thisPage) {
							$paging .= '<li class="page-item on"><a class="page-link" href="#">' . $i . '</a></li>';
						} else {
							$paging .= '<li class="page-item" onclick="javascript:' . $link . '(' . $i . ')"><a class="page-link" href="#">' . $i . '</a></li>';
						}
					}
				} 
				//페이지가 블럭을 넘어갈 때 블럭 범위도 이동.
				else {
					//총 블럭 수 구하기.
					if ($totalCount == 0) {
						$totalBlock = 1;			
					} else {
						$totalBlock = ceil($totalPage / $this->blockSize);
					}
					
					//현재 블럭값 구하기
					$thisBlock = ceil($thisPage / $this->blockSize);
					
					//시작 페이지 및 종료 페이지 구하기.
					//현재 블럭의 시작 번호를 구함.
					$blockStartView = ($thisBlock - 1) * $this->blockSize + 1;
					//현재 블럭의 끝 페이지를 구함.
					$blockEndView = $blockStartView + $this->blockSize - 1;
					
					//마지막 페이지가 총 페이지보다 클 경우 마지막 페이지는 전체 페이지와 같음.
					if ($blockEndView > $totalPage) {
						$blockEndView = $totalPage;			
					}
					
					//페이지 번호 표시
					$i; $endloop;
					$endloop = $this->blockSize + $blockStartView - 1;
					
					//현재 시작 블럭부터 블럭에 표시할 페이지 수만큼 page를 루프를 돌림 마지막 블럭일 경우에는 수가 모자를 수도 있기 때문에 end page만큼 돌린다.
					if (($endloop > $totalCount) || ($endloop > $blockEndView)) {
						$endloop = $blockEndView;			
					}
					
					for($i = $blockStartView; $i <= $endloop; $i++) {
						if($thisPage == $i) {
							$paging .= '<li class="page-item on"><a class="page-link" href="#">' . $i . '</a></li>';
						} else {
							$paging .= '<li class="page-item" onclick="javascript:' . $link . '(' . $i . ')"><a class="page-link" href="#">' . $i . '</a></li>';
						}
					}
					
					$prevNum = ($thisPage - $this->blockSize > 1) ? $thisPage - $this->blockSize : 1 ;
					$nextNum = ($thisPage + $this->blockSize >= $totalPage) ? $totalPage : $thisPage + $this->blockSize ;
					
					if($thisBlock > 1) {
						if($prevBtn == "") {
							$prevBtn = '<a class="page-link" href="#"><img src="/img/prev_ic_n.png" alt="" class="img_m"></a>';
						}
					} else {
						if($prevBtn == "") {
							$prevBtn = '<li class="page-item" onclick="javascript:' . $link . '(' . $prevNum . ')"><a class="page-link" href="#"><img src="/img/prev_ic_n.png" alt="" class="img_m"></a></li>';
						} else {
							$prevBtn = '<li class="page-item" onclick="javascript:' . $link . '(' . $prevNum . ')">' . $prevBtn . '</li>';
						}
					}
					
					if($thisBlock == $totalBlock) {
						if($nextBtn == "") {
							$nextBtn = '<a class="page-link" href="#"><img src="/img/next_ic_n.png" alt="" class="img_m2"></a>';
						}
					} else {
						if($nextBtn == "") {
							$nextBtn = '<li class="page-item" onclick="javascript:' . $link . '(' . $nextNum . ')"><a class="page-link" href="#"><img src="/img/next_ic_n.png" alt="" class="img_m2"></a></li>';
						} else {
							$nextBtn = '<li class="page-item" onclick="javascript:' . $link . '(' . $nextNum . ')">' . $nextBtn . '</li>';
						}
					}
					
				}
				
				if($showFast == false) {
					$paging_view = $firstBtn . $prevBtn .'<ul>'. $paging .'</ul>'. $nextBtn . $endBtn;
				} else {
					$paging_view = $firstBtn . $prevBtn .'<ul>'. $paging .'</ul>'. $nextBtn . $endBtn;
				}
				
				return $paging_view;
			
			} else {
				return "";
			}
		}
}